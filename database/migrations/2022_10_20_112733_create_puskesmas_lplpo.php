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
        Schema::create('puskesmas_lplpo', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('id_master');
            $table->integer('id_kategori');
            $table->string('kode_lplpo');
            $table->integer('penerimaan');
            $table->integer('persediaan');
            $table->integer('pemakaian');
            $table->integer('sisa_stok');
            $table->integer('stok_opname');
            $table->integer('permintaan');
            $table->integer('pemberian');
            $table->text('keterangan');
            $table->text('status');
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
        Schema::dropIfExists('puskesmas_lplpo');
    }
};
