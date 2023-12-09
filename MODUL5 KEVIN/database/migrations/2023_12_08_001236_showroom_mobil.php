<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 
     * @return void
     */
    public function up(): void
    {
        Schema::create('showroom_mobil', function (Blueprint $table){
            $table->id();
            $table->string('nama_mobil',255);
            $table->string('brand_mobil',255);
            $table->string('warna_mobil',255);
            $table->string('tipe_mobil',255);
            $table->integer('harga_mobil');
            $table->timestamps();
        });


        //
    }

    /**
     * Reverse the migrations.
     * 
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('showroom_mobil');
        //
    }
};
