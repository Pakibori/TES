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
        Schema::create('obat_masuk',function(Blueprint $table){
            $table->integer('id');
            $table->integer('id_obat');
            $table->integer('id_master');
            $table->string('kd_transaksi');
            $table->integer('jumlah_masuk')->nullable();
            $table->date('tanggal_exp');
            $table->text('keterangan');
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
        Schema::dropIfExists('obat_masuk');
    }
};
