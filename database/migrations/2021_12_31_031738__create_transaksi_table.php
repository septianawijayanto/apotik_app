<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->string('kode_invoice', 20);
            $table->foreignId('produk_id')->references('id')->on('produk')->onDelete('cascade');
            // $table->foreignId('konsumen_id')->references('id')->on('konsumen')->onDelete('cascade');
            $table->string('nama', 100);
            $table->string('no_hp', 20);
            $table->integer('jml_beli');
            $table->integer('total');
            $table->integer('bayar');
            $table->integer('kembalian');
            $table->text('ket');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('transaksi');
    }
}
