<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiObatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_obat', function (Blueprint $table) {
            $table->string('kode_transaksi', 100)->primary();
            $table->string('terima_dari', 100);
            $table->string('nama_pengirim', 100);
            $table->string('kirim_ke', 100);
            $table->string('nama_penerima', 100);
            $table->text('catatan')->nullable();
            $table->string('tipe_transaksi', 10);
            $table->dateTime('tanggal');
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
        Schema::dropIfExists('transaksi_obat');
    }
}
