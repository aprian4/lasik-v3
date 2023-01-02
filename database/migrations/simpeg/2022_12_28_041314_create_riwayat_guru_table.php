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
        Schema::create('riwayat_guru', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id_riwayat_guru', true);
            $table->unsignedInteger('id_identitas')->default(0);
            $table->string('jenis_sekolah', 5)->nullable();
            $table->string('nama_sekolah_induk')->nullable();
            $table->string('nama_sekolah_mengajar')->nullable();
            $table->string('bidang_studi')->nullable();
            $table->string('mata_pelajaran')->nullable();
            $table->date('tmt_mengajar')->nullable();
            $table->string('kepala_sekolah', 5)->nullable();
            $table->string('no_nuptk', 100)->nullable();
            $table->dateTime('create_date')->nullable()->useCurrent();
            $table->string('create_op', 20)->nullable();
            $table->dateTime('update_date')->nullable()->useCurrent();
            $table->string('update_op', 20)->nullable();
            $table->text('dokumen')->nullable();
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('riwayat_guru');
    }
};
