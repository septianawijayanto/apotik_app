<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Jenis;
use App\Models\Produk;
use App\Models\SatuanProduk;
use Illuminate\Http\Request;
use Validator;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = 'Data Produk';
        $jenis = Jenis::get();
        $satuan = SatuanProduk::get();
        $datas = Produk::all();
        if ($request->ajax()) {
            return datatables()->of($datas)->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $data->id . '" data-original-title="Edit" class="btn btn-warning btn-xs edit-post"><i class="fas fa-pencil-alt"></i> </a>';
                    $button .= '&nbsp;&nbsp;';
                    $button .= '<button type="button" name="delete" id="' . $data->id . '"  class="delete btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>';
                    return $button;
                })->addColumn('jenis', function ($data) {
                    return $data->jenis->nama_jenis;
                })->addColumn('jumlah', function ($data) {
                    return $data->jml . ' ' .  $data->satuan->nama_satuan;
                })->addColumn('harga', function ($data) {
                    return  'Rp. ' . number_format($data->harga);
                })->addColumn('satuan', function ($data) {
                    return $data->satuan->nama_satuan;
                })->rawColumns(['action', 'jenis', 'jumlah', 'satuan'])->make(true);
        }
        return view('produk.index', compact('title', 'jenis', 'satuan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'kode_produk' => 'required',
            'nama_produk' => 'required',
            'satuan_id' => 'required',
            'jenis_id' => 'required',
            'tgl_masuk' => 'required',
            'tgl_exp' => 'required',
            'jml' => 'required',
            'harga' => 'required',
        ]);
        if (!$validator->passes()) {
            return response()->json([
                'error' => true,
                'pesan' => $validator->errors()->all()
            ]);
        }
        $id = $request->id;
        Produk::updateOrCreate([
            'id' => $id,
        ], [
            'kode_produk' => $request->kode_produk,
            'nama_produk' => $request->nama_produk,
            'satuan_id' => $request->satuan_id,
            'jenis_id' => $request->jenis_id,
            'tgl_masuk' => $request->tgl_masuk,
            'tgl_exp' => $request->tgl_exp,
            'jml' => $request->jml,
            'harga' => $request->harga,
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
        $data = Produk::find($id);
        return response()->json($data);
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
        $data = Produk::where('id', $id)->delete();
        return response()->json($data);
    }
}
