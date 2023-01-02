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
        Schema::create('riwayat_masuk_tangsel', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id_masuk', true);
            $table->integer('id_identitas');
            $table->string('asal_instansi', 100);
            $table->string('asal_unit_kerja', 100);
            $table->string('penjabat', 100);
            $table->string('no_sk', 100);
            $table->date('tmt');
            $table->string('jabatan', 100)->nullable();
            $table->text('dokumen')->nullable();
            $table->integer('status')->comment('1: Belum diverifikasi; 2: Sudah diverifikasi');
            $table->dateTime('create_date')->nullable()->useCurrent();
            $table->string('create_op', 20)->nullable();
            $table->dateTime('update_date')->nullable()->useCurrent();
            $table->string('update_op', 20)->nullable();
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
        Schema::dropIfExists('riwayat_masuk_tangsel');
    }
};
