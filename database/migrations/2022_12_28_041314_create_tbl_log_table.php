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
        Schema::create('tbl_log', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id', true);
            $table->integer('table_id')->nullable();
            $table->string('aktor', 30);
            $table->integer('level_id');
            $table->string('aksi', 10);
            $table->dateTime('tanggal_aksi');
            $table->string('jenis', 100);
            $table->text('keterangan_tolak')->nullable();
            $table->integer('status')->default(1)->comment('\'1: Belum diverifikasi; 2: Sudah diverifikasi\';');
            $table->boolean('reserved')->unsigned()->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_log');
    }
};
