<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use PDF;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = 'Transaksi';
        $produk = Produk::where('jml', '>', '0')->get();
        $datas = Transaksi::all();
        if ($request->ajax()) {
            return datatables()->of($datas)->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $button = ' <a href="/transaksi/kwitansi/' . $data->id . '" class="btn btn-warning btn-xs"><i class="fa fa-print"></i></a>';
                    return $button;
                })->addColumn('produk', function ($data) {
                    return $data->produk->nama_produk;
                })->addColumn('kembalian', function ($data) {
                    return  'Rp. ' . number_format($data->kembalian);
                })->addColumn('bayar', function ($data) {
                    return  'Rp. ' . number_format($data->bayar);
                })
                ->addColumn('total', function ($data) {
                    return  'Rp. ' . number_format($data->total);
                })
                ->make(true);
        }
        // return response()->json($datas);
        return view('transaksi.index', compact('title', 'produk'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Tambah Transaksi';
        $produk = Produk::where('jml', '>', '0')->get();
        return view('transaksi.create', compact('title', 'produk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pid = $request->produk_id;
        $harga = Produk::find($pid);
        $rego = $harga->harga;
        $total = $request->jml_beli * $rego;
        $jujul = $request->bayar - ($request->jml_beli * $rego);

        $validator = Validator::make($request->all(), [
            'kode_invoice' => 'required|max:20',
            'nama' => 'required|max:100',
            'no_hp' => 'required|max:20',
            'produk_id' => 'required',
            'jml_beli' => 'required|numeric',
            // 'bayar' => 'required|numeric',
            'bayar'        => 'required|numeric|min:' . $total . '|max:' . ($total + 100000),
            'ket' => 'required',
        ], [
            'bayar.min' => 'Pembayaran minimal ' . ($total) . '.',
            'bayar.max' => 'Pembayaran terlalu besar ' . ($request->get('bayar')) . '.',
        ]);
        if (!$validator->passes()) {
            return response()->json([
                'error' => true,
                'pesan' => $validator->errors()->all()
            ]);
        }

        // $data = Transaksi::get();

        $saiki = $harga->jml;
        $anyar = $saiki - $request->jml_beli;
        $dituku = $harga->jml_keluar;
        $jmlsaiki = $dituku + $request->jml_beli;
        Produk::where('id', $pid)->update([
            'jml' => $anyar,
            'jml_keluar' => $jmlsaiki,
        ]);
        // $cek = Transaksi::where(''); sek
        $id = $request->id;
        Transaksi::updateOrCreate([
            'id' => $id,
        ], [
            'user_id' => Auth::user()->id,
            'kode_invoice' => $request->kode_invoice,
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'produk_id' => $request->produk_id,
            'jml_beli' => $request->jml_beli,
            'bayar' => $request->bayar,
            'ket' => $request->ket,
            'total' => $total,
            'kembalian' => $jujul,
        ]);

        return response()->json([
            'success' => true,
            'pesan' => 'Data Berhasil Ditambah',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function hitung(Request $request, $id)
    {
        $produk = Produk::where('id', $id)->pluck('harga', 'id');
        return response()->json($produk);
    }
    public function print($id)
    {
        $tgl = date('d F Y');
        $data = Transaksi::findOrFail($id);
        $pdf = PDF::loadview('transaksi.invoice', compact('data', 'tgl'))->setPaper('a5', 'Potrait');
        return $pdf->stream();
    }
}
