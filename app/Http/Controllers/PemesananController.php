<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pemesanan;

class PemesananController extends Controller
{
    // Menampilkan Halaman Manajemen Data Pemesanan
    public function Pemesanan()
    {
        $pemesanan = Pemesanan::all();

        return view('admin/pemesanan', compact('pemesanan'));
    }

    // Menampilkan Halaman Tambah Data Pemesanan
    public function AddPemesanan(Request $request)
    {
        // Validasi Inputan Form
        $request->validate([
            'tanggal_masuk' => 'required|date',
            'no_registrasi' => 'required|unique:pemesanan',
            'nama_customer' => 'required|string',
            'jenis_mobil' => 'required|string',
            'type_mobil' => 'required|string',
            'tenor' => 'required|numeric',
            'nama_dealer' => 'required|string',
            'nama_sales_dealer' => 'required|string',
            'nama_sales_acc' => 'required|string',
            'new_used' => 'required',
            'status' => 'required',
            'time' => 'required|numeric',
            'keterangan' => 'required|string'
        ], [
            'tanggal_masuk.required' => 'Tanggal masuk tidak boleh kosong.',
            'tanggal_masuk.date' => 'Tanggal masuk tidak valid.',
            'no_registrasi.required' => 'No. registrasi tidak boleh kosong.',
            'no_registrasi.unique' => 'No. registrasi sudah digunakan.',
            'nama_customer.required' => 'Nama customer tidak boleh kosong.',
            'nama_customer.string' => 'Nama customer harus berupa string.',
            'jenis_mobil.required' => 'Jenis mobil tidak boleh kosong.',
            'jenis_mobil.string' => 'Jenis mobil harus berupa string.',
            'type_mobil.required' => 'Tipe mobil tidak boleh kosong.',
            'type_mobil.string' => 'Tipe mobil harus berupa string.',
            'tenor.required' => 'Tenor tidak boleh kosong.',
            'tenor.numeric' => 'Tenor harus berupa angka.',
            'nama_dealer.required' => 'Nama dealer tidak boleh kosong.',
            'nama_dealer.string' => 'Nama dealer harus berupa string.',
            'nama_sales_dealer.required' => 'Nama sales dealer tidak boleh kosong.',
            'nama_sales_dealer.string' => 'Nama sales dealer harus berupa string.',
            'nama_sales_acc.required' => 'Nama sales acc tidak boleh kosong.',
            'nama_sales_acc.string' => 'Nama sales acc harus berupa string.',
            'new_used.required' => 'Status mobil tidak boleh kosong.',
            'status.required' => 'Status tidak boleh kosong.',
            'time.required' => 'Waktu tidak boleh kosong.',
            'time.numeric' => 'Waktu harus berupa angka.',
            'keterangan.required' => 'Keterangan tidak boleh kosong.',
            'keterangan.string' => 'Keterangan harus berupa string.'
        ]);

        if ($request->status == "APPROVE") {
            $kode_status = "DPOP";
        } elseif ($request->status == "VALID") {
            $kode_status = "OVOP";
        } elseif ($request->status == "IN PROCESS") {
            $kode_status = "APOV";
        } elseif ($request->status == "CANCEL") {
            $kode_status = "RDCA";
        } else {
            $kode_status = "APRF";
        }

        // Menambahkan Data Pemesanan ke Database
        $pemesanan = Pemesanan::create([
            'tanggal_masuk' => $request->tanggal_masuk,
            'no_registrasi' => $request->no_registrasi,
            'nama_customer' => $request->nama_customer,
            'jenis_mobil' => $request->jenis_mobil,
            'type_mobil' => $request->type_mobil,
            'tenor' => $request->tenor,
            'nama_dealer' => $request->nama_dealer,
            'nama_sales_dealer' => $request->nama_sales_dealer,
            'nama_sales_acc' => $request->nama_sales_acc,
            'new_used' => $request->new_used,
            'kode_status' => $kode_status,
            'status' => $request->status,
            'time' => $request->time,
            'keterangan' => $request->keterangan
        ]);

        // dd($pemesanan);

        return redirect('/pemesanan')->with('sukses', 'Data pemesanan berhasil ditambahkan.');
    }

    // Menampilkan Halaman Edit Data Pemesanan
    public function EditPemesanan($id)
    {
        $pemesanan = Pemesanan::find($id);

        // dd($pemesanan);

        return view('admin/editPemesanan', compact('pemesanan'));
    }

    // Mengubah Data Pemesanan
    public function UpdatePemesanan(Request $request, $id)
    {
        // Validasi Inputan Form
        $request->validate([
            'tanggal_masuk' => 'required|date',
            'no_registrasi' => 'required',
            'nama_customer' => 'required|string',
            'jenis_mobil' => 'required|string',
            'type_mobil' => 'required|string',
            'tenor' => 'required|numeric',
            'nama_dealer' => 'required|string',
            'nama_sales_dealer' => 'required|string',
            'nama_sales_acc' => 'required|string',
            'new_used' => 'required',
            'status' => 'required',
            'time' => 'required|numeric',
            'keterangan' => 'required|string'
        ], [
            'tanggal_masuk.required' => 'Tanggal masuk tidak boleh kosong.',
            'tanggal_masuk.date' => 'Tanggal masuk tidak valid.',
            'no_registrasi.required' => 'No. registrasi tidak boleh kosong.',
            'nama_customer.required' => 'Nama customer tidak boleh kosong.',
            'nama_customer.string' => 'Nama customer harus berupa string.',
            'jenis_mobil.required' => 'Jenis mobil tidak boleh kosong.',
            'jenis_mobil.string' => 'Jenis mobil harus berupa string.',
            'type_mobil.required' => 'Tipe mobil tidak boleh kosong.',
            'type_mobil.string' => 'Tipe mobil harus berupa string.',
            'tenor.required' => 'Tenor tidak boleh kosong.',
            'tenor.numeric' => 'Tenor harus berupa angka.',
            'nama_dealer.required' => 'Nama dealer tidak boleh kosong.',
            'nama_dealer.string' => 'Nama dealer harus berupa string.',
            'nama_sales_dealer.required' => 'Nama sales dealer tidak boleh kosong.',
            'nama_sales_dealer.string' => 'Nama sales dealer harus berupa string.',
            'nama_sales_acc.required' => 'Nama sales acc tidak boleh kosong.',
            'nama_sales_acc.string' => 'Nama sales acc harus berupa string.',
            'new_used.required' => 'Status mobil tidak boleh kosong.',
            'status.required' => 'Status tidak boleh kosong.',
            'time.required' => 'Waktu tidak boleh kosong.',
            'time.numeric' => 'Waktu harus berupa angka.',
            'keterangan.required' => 'Keterangan tidak boleh kosong.',
            'keterangan.string' => 'Keterangan harus berupa string.'
        ]);

        if ($request->status == "APPROVE") {
            $kode_status = "DPOP";
        } elseif ($request->status == "VALID") {
            $kode_status = "OVOP";
        } elseif ($request->status == "IN PROCESS") {
            $kode_status = "APOV";
        } elseif ($request->status == "CANCEL") {
            $kode_status = "RDCA";
        } else {
            $kode_status = "APRF";
        }

        // Mencari Data Sesuai Dengan id
        $pemesanan = Pemesanan::find($id);

        // Mengubah Data Pemesanan di Database
        $pemesanan->update([
            'tanggal_masuk' => $request->tanggal_masuk,
            'no_registrasi' => $request->no_registrasi,
            'nama_customer' => $request->nama_customer,
            'jenis_mobil' => $request->jenis_mobil,
            'type_mobil' => $request->type_mobil,
            'tenor' => $request->tenor,
            'nama_dealer' => $request->nama_dealer,
            'nama_sales_dealer' => $request->nama_sales_dealer,
            'nama_sales_acc' => $request->nama_sales_acc,
            'new_used' => $request->new_used,
            'kode_status' => $kode_status,
            'status' => $request->status,
            'time' => $request->time,
            'keterangan' => $request->keterangan
        ]);

        // dd($pemesanan);

        return redirect('/pemesanan')->with('sukses', 'Data pemesanan berhasil diperbarui.');
    }

    // Menghapus Data Pemesanan
    public function DeletePemesanan($id)
    {
        // Mencari Data Pemesanan di Database
        $pemesanan = Pemesanan::find($id);

        // Menghapus Data Pemesanan di Database
        $pemesanan->delete();

        return redirect('/pemesanan');
    }

    // Melihat Detail Data Pemesanan
    public function DetailPemesanan($id)
    {
        // Mencari Data Sesuai Dengan id
        $pemesanan = Pemesanan::find($id);

        // dd($pemesanan);

        return view('admin/detailPemesanan', compact('pemesanan'));
    }
}
