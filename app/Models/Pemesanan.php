<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $table = 'pemesanan';
    protected $fillable = [
        'tanggal_masuk',
        'no_registrasi',
        'nama_customer',
        'jenis_mobil',
        'type_mobil',
        'tenor',
        'nama_dealer',
        'nama_sales_dealer',
        'nama_sales_acc',
        'new_used',
        'kode_status',
        'status',
        'time',
        'keterangan'
    ];
}
