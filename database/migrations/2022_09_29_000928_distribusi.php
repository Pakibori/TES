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
        Schema::create('distribusi',function(Blueprint $table){
            $table->integer('id');
            $table->integer('id_master');
            $table->integer('id_user');
            $table->integer('jumlah_distribusi');
            $table->date('tanggal_distribusi');
            $table->date('tanggal_exp_date');
            $table->text('keterangan_distribusi');
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
        Schema::dropIfExists('distribusi');
    }
};
