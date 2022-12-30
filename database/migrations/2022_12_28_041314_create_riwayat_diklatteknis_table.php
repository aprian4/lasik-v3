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
        Schema::create('riwayat_diklatteknis', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id_diklatteknis', true);
            $table->unsignedInteger('id_identitas')->default(0);
            $table->dateTime('create_date')->nullable()->useCurrent();
            $table->string('create_op', 20)->nullable();
            $table->dateTime('update_date')->nullable()->useCurrent();
            $table->string('update_op', 20)->nullable();
            $table->integer('id_peltek')->default(0);
            $table->string('nama_lembaga', 150)->nullable();
            $table->integer('id_negara')->default(0);
            $table->integer('tahun')->nullable();
            $table->string('jam', 15)->nullable();
            $table->string('no', 40)->nullable();
            $table->date('tanggal')->nullable()->useCurrent();
            $table->text('dokumen')->nullable();
            $table->integer('status')->default(0)->comment('1: Belum diverifikasi; 2: Sudah diverifikasi');
            $table->text('keterangan_tolak')->nullable();
            $table->text('data_temp')->nullable();
            $table->tinyInteger('status_ubah')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayat_diklatteknis');
    }
};
