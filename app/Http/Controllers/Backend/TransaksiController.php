<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

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
        $produk = Produk::get();
        $datas = Transaksi::all();
        if ($request->ajax()) {
            return datatables()->of($datas)->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $data->id . '" data-original-title="Edit" class="btn btn-warning btn-xs edit-post"><i class="fas fa-pencil-alt"></i> </a>';
                    $button .= '&nbsp;&nbsp;';
                    $button .= '<button type="button" name="delete" id="' . $data->id . '"  class="delete btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>';
                    return $button;
                })->addColumn('produk', function ($data) {
                    return $data->produk->nama_produk;
                })->make(true);
        }
        // return response()->json($datas);
        return view('transaksi.index', compact('title', 'produk'));
    }
    // public function cari(Request $request, $id)
    // {
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Tambah Transaksi';
        return view('transaksi.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kode_invoice' => 'required',
            'nama' => 'required',
            'no_hp' => 'required',
            'produk_id' => 'required',
            'jml' => 'required',
            'bayar' => 'required',
            'ket' => 'required',
        ]);
        if (!$validator->passes()) {
            return response()->json([
                'error' => true,
                'pesan' => $validator->errors()->all()
            ]);
        }

        // $data = Transaksi::get();
        $id = $request->produk_id;
        $harga = Produk::find($id);
        $rego = $harga->harga;
        $id = $request->id;
        Transaksi::updateOrCreate([
            'id' => $id,
        ], [
            'user_id' => Auth::user()->id,
            'kode_invoice' => $request->kode_invoice,
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'produk_id' => $request->produk_id,
            'jml' => $request->jml,
            'bayar' => $request->bayar,
            'ket' => $request->ket,
            'total' => $request->jml * $rego,
            'kembalian' => $request->bayar - ($request->jml * $rego),
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
}
