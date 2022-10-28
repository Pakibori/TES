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
    public function up()
    {
        Schema::create('obat',function(Blueprint $table){
            $table->integer('id');
            $table->integer('id_master');
            $table->integer('id_kategori');
            $table->string('lemari');
            $table->string('rak');
            $table->integer('stok')->nullable();
            $table->integer('stok_awal')->nullable();
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
        Schema::dropIfExists('obat');
    }
};
