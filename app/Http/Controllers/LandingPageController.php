<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\FotoSlider;
use App\Models\Pemesanan;

class LandingPageController extends Controller
{
    // Menampilkan Halaman Landing Page
    public function LandingPage()
    {
        $foto = FotoSlider::all();

        return view('landingPage', compact('foto'));
    }

    // Menampilkan Halaman Manajemen Foto Slider Landing Page
    public function FotoSlider()
    {
        $foto = FotoSlider::all();

        return view('admin/fotoSlider', compact('foto'));
    }

    // Menambahkan Foto Slider Landing Page
    public function AddFotoSlider(Request $request)
    {
        // Validasi Inputan Form
        $request->validate([
            'foto' => 'required|mimes:jpeg,png,jpg',
            'judul' => 'required|string',
            'deskripsi' => 'required|string'
        ], [
            'foto.required' => 'Foto tidak boleh kosong',
            'foto.mimes' => 'Format foto tidak sesuai (harus jpeg/png/jpg)',
            'judul.required' => 'Judul tidak boleh kosong',
            'judul.string' => 'Judul harus berupa string',
            'deskripsi.required' => 'Deskripsi tidak boleh kosong',
            'deskripsi.string' => 'Deskripsi harus berupa string'
        ]);

        // Menyimpan Foto/Gambar ke Dalam Folder Public
        $imgName = $request->foto->getClientOriginalName() . '-' . time() . '.' . $request->foto->extension();
        $request->foto->move(public_path('landing'), $imgName);

        // Menambahkan Data ke Database
        FotoSlider::create([
            'foto' => $imgName,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect('/foto-slider')->with('sukses', 'Foto berhasil ditambahkan.');
    }

    // Menghapus Foto Slider Landing Page
    public function DeleteFotoSlider($id)
    {
        // Mencari Data Sesuai dengan id
        $foto = FotoSlider::findorfail($id);

        $file = public_path('/landing/').$foto->foto;

        // Cek Jika Ada Foto
        if (file_exists($file)) {
            // Menghapus Foto dari File
            @unlink($file);
        }

        // Menghapus Data di Database
        $foto->delete();

        return redirect('/foto-slider');
    }

    // Menampilkan Halaman Find My Order
    public function FindMyOrder()
    {
        return view('findMyOrder');
    }

    // Mencari Data Pesanan Saya
    public function Search(Request $request)
    {
        // Menangkap Data Pencarian
        $cari = $request->search;

        // Mengambil Data Dari Database Sesuai Dengan Pencarian Data
        $pemesanan = Pemesanan::where('no_registrasi',$cari)->first();
        $pemesanan2 = Pemesanan::where('no_registrasi',$cari)->get();
        $data = $pemesanan2->count();

        // dd($pemesanan);

        return view('findMyOrder', compact('pemesanan','data'));
    }
}
