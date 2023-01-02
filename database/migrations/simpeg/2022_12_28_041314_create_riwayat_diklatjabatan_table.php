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
        Schema::create('riwayat_diklatjabatan', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id_rdj', true);
            $table->integer('id_identitas');
            $table->dateTime('create_date')->nullable()->useCurrent();
            $table->string('create_op', 20)->nullable();
            $table->dateTime('update_date')->nullable()->useCurrent();
            $table->string('update_op', 20)->nullable();
            $table->integer('tahun')->nullable();
            $table->integer('jam')->nullable();
            $table->string('lembaga', 100)->nullable();
            $table->date('tanggal')->nullable();
            $table->string('no', 40)->nullable();
            $table->string('tempat', 100)->nullable();
            $table->integer('jenis')->nullable();
            $table->string('kd_pelatihan', 15)->nullable();
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
        Schema::dropIfExists('riwayat_diklatjabatan');
    }
};
