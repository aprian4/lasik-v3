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
        Schema::create('riwayat_kunjungan_keluarnegeri', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id_kunjungan');
            $table->string('kd_negara', 3);
            $table->integer('id_identitas');
            $table->dateTime('create_date')->nullable()->useCurrent();
            $table->string('create_op', 20)->nullable();
            $table->dateTime('update_date')->nullable()->useCurrent();
            $table->string('update_op', 20)->nullable();
            $table->text('tujuan');
            $table->date('mulai');
            $table->date('selesai');
            $table->text('sumber_biaya');
            $table->text('dokumen')->nullable();
            $table->integer('status')->comment('1: Belum diverifikasi; 2: Sudah diverifikasi');
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
        Schema::dropIfExists('riwayat_kunjungan_keluarnegeri');
    }
};
