<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_transaksi', function (Blueprint $table) {
            $table->string('no_batch', 100)->primary();
            $table->string('kode_transaksi', 100)->index();
            $table->foreign('kode_transaksi')->references('kode_transaksi')->on('transaksi_obat')->onDelete('cascade');
            $table->string('kode_obat', 100)->index();
            $table->foreign('kode_obat')->references('kode_obat')->on('master_obat')->onDelete('cascade');
            $table->string('nomor_faktur', 100)->unique();
            $table->string('kadaluarsa', 100);
            $table->integer('harga');
            $table->integer('jumlah');
            $table->enum('tipe_transaksi', ['masuk', 'keluar']);
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
        Schema::dropIfExists('detail_transaksi');
    }
}
