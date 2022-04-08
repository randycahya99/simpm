<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pemesanan;

class DashboardController extends Controller
{
    // Menampilkan Halaman Dashboard
    public function Dashboard()
    {
        $customer = Pemesanan::count();
        $approve = Pemesanan::where('status','APPROVE')->count();
        $valid = Pemesanan::where('status','VALID')->count();
        $process = Pemesanan::where('status','IN PROCESS')->count();
        $cancel = Pemesanan::where('status','CANCEL')->count();
        $reject = Pemesanan::where('status','REJECT')->count();

        return view('admin/dashboard', compact(
            'customer',
            'approve',
            'valid',
            'process',
            'cancel',
            'reject'
        ));
    }
}
