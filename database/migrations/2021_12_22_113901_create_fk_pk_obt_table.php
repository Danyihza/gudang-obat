<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFkPkObtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fk_pk_obt', function (Blueprint $table) {
            $table->string('kode_obat')->index();
            $table->foreign('kode_obat')->references('kode_obat')->on('master_obat')->onDelete('cascade');
            $table->string('id_user')->index();
            $table->foreign('id_user')->references('id_user')->on('user')->onDelete('cascade');
            $table->integer('stok');
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
        Schema::dropIfExists('fk_pk_obt');
    }
}
