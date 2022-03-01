<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Dashboard';
        $apoteker = User::where('role', 'Apoteker')->count();
        $kasir = User::where('role', 'Kasir')->count();
        $admin = User::where('role', 'Admin')->count();
        $transaksi = Transaksi::count();
        return view('dashboard.index', compact('title', 'admin', 'kasir', 'apoteker', 'transaksi'));
    }
    public function kontak()
    {
        $title = 'Kontak Person';
        return view('dashboard.kontak', compact('title'));
    }
}
