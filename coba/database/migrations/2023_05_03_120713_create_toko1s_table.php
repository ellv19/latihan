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
        Schema::create('toko1s', function (Blueprint $table) {
            $table->integer('id_toko');
            $table->primary('id_toko');
            $table->string('nama_toko', 20);
            $table->string('alamat', 100);
            $table->string('tlp-toko', 13);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('toko1s');
    }
};
