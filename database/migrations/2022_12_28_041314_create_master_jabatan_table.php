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
        Schema::create('master_jabatan', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id_jabatan', true);
            $table->integer('kd_jabatan')->index('kd_jabatan');
            $table->string('nama_jabatan', 250)->default('')->index('nama_jabatan');
            $table->string('ket_eselon', 5)->default('')->index('ket_eselon');
            $table->string('kd_organisasi', 13)->index('kd_organisasi');
            $table->string('kd_satuan_organisasi', 15);
            $table->string('kd_unit_organisasi', 15);
            $table->string('kd_unit_kerja', 15);
            $table->integer('tahun')->nullable();
            $table->string('bulan', 2);
            $table->integer('parent')->nullable()->index('parent');
            $table->string('keterangan', 50)->nullable();
            $table->integer('pensiun')->nullable();
            $table->integer('tunjangan_jabatan')->nullable();
            $table->integer('kd_jenis_jabatan')->nullable();
            $table->integer('id_golongan')->nullable();
            $table->integer('angka_kredit')->nullable();
            $table->integer('flag')->comment('0 = staf; 1 = struktural');
            $table->dateTime('create_date');
            $table->string('create_op', 20);
            $table->dateTime('update_date')->nullable();
            $table->string('update_op', 20)->nullable();
            $table->integer('status_data')->index('status_data');
            $table->unsignedBigInteger('tpp_beban_kerja')->default(0);
            $table->text('reserved1')->nullable();
            $table->unsignedTinyInteger('kelas_jabatan')->nullable()->default(0);
            $table->unsignedInteger('kebutuhan')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_jabatan');
    }
};
