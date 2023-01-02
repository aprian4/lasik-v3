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
        Schema::create('riwayat_ortu', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id_ortu', true);
            $table->integer('id_identitas');
            $table->dateTime('create_date')->nullable()->useCurrent();
            $table->string('create_op', 20)->nullable();
            $table->dateTime('update_date')->nullable()->useCurrent();
            $table->string('update_op', 20)->nullable();
            $table->string('nama_ayah', 100);
            $table->string('nama_ibu', 100);
            $table->string('pekerjaan_ayah', 100);
            $table->string('pekerjaan_ibu', 100);
            $table->date('tgllahir_ayah');
            $table->date('tgllahir_ibu');
            $table->text('alamat_ayah');
            $table->text('alamat_ibu');
            $table->text('tmplahir_ayah')->nullable();
            $table->text('tmplahir_ibu')->nullable();
            $table->integer('status_ayah')->default(1)->comment('1=hidup,2=meninggal');
            $table->integer('status_ibu')->default(1)->comment('1=hidup,2=meninggal');
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
        Schema::dropIfExists('riwayat_ortu');
    }
};
