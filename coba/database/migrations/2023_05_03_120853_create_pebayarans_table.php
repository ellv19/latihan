<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pebayarans', function (Blueprint $table) {
            $table->integer('id_pembayaran');
            $table->primary('id_pembayaran');
            $table->date('tanggal_pembayaran');
            $table->integer('id_toko');
            $table->integer('total');
            $table->foreign('id_toko')->references('id_toko')->on('toko1s');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pebayarans');
    }
};
