<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_masuk');
            $table->string('no_registrasi');
            $table->string('nama_customer');
            $table->string('jenis_mobil');
            $table->string('type_mobil');
            $table->integer('tenor');
            $table->string('nama_dealer');
            $table->string('nama_sales_dealer');
            $table->string('nama_sales_acc');
            $table->enum('new_used', ['N','S']);
            $table->string('kode_status')->nullable();
            $table->enum('status', ['APPROVE','VALID','IN PROCESS','CANCEL','REJECT']);
            $table->integer('time');
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemesanan');
    }
}
