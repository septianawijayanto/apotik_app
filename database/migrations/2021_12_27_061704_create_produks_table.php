<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->string('kode_produk', 30);
            $table->string('nama_produk', 100);
            $table->foreignId('satuan_id')->references('id')->on('satuan_produk')->onDelete('cascade');
            $table->foreignId('jenis_id')->references('id')->on('jenis')->onDelete('cascade');
            $table->date('tgl_masuk');
            $table->date('tgl_exp');
            $table->integer('jml');
            $table->integer('jml_keluar')->nullable();
            $table->integer('harga');
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
        Schema::dropIfExists('produks');
    }
}
