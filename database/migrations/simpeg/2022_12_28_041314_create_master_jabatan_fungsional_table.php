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
        Schema::create('master_jabatan_fungsional', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id', true);
            $table->text('nama_jabatan')->nullable();
            $table->integer('kd_jabatan')->nullable()->index('kd_jabatan');
            $table->string('cpns_pns', 10)->nullable();
            $table->integer('kd_jenis_jabatan')->nullable()->index('kd_jenis_jabatan');
            $table->integer('pensiun')->nullable();
            $table->integer('tunjangan_jabatan')->nullable();
            $table->integer('angka_kredit')->nullable();
            $table->integer('id_golongan')->nullable()->index('id_golongan');
            $table->char('tingkat', 2)->nullable();
            $table->dateTime('create_date')->nullable();
            $table->string('create_op', 20)->nullable();
            $table->dateTime('update_date')->nullable();
            $table->string('update_op', 20)->nullable();
            $table->integer('status_data')->nullable()->index('status_data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_jabatan_fungsional');
    }
};
