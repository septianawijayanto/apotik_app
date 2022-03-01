<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use PDF;

class LaporanController extends Controller
{
    public function index()
    {
        $title = 'Laporan';
        return view('laporan.index', compact('title'));
    }
    public function cetak()
    {
        $tgl = date('d F Y');
        $data = Transaksi::all();
        $pdf = PDF::loadview('laporan.pdf', compact('data', 'tgl'))->setPaper('a4', 'Landscape');
        return $pdf->stream();
    }
}
