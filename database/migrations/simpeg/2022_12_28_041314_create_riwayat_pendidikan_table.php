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
        Schema::create('riwayat_pendidikan', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id_rpendidikan', true);
            $table->integer('id_identitas')->index('idx_id_identitas');
            $table->dateTime('create_date')->nullable()->useCurrent();
            $table->string('create_op', 20)->nullable();
            $table->dateTime('update_date')->nullable()->useCurrent();
            $table->string('update_op', 20)->nullable();
            $table->integer('id_jurusan')->index('idx_id_jurusan');
            $table->integer('id_lembaga')->index('idx_id_lembaga');
            $table->integer('tahun_ijazah')->nullable()->index('idx_tahun_ijazah');
            $table->string('nama_lembaga', 100)->nullable()->index('idx_nama_lembaga');
            $table->string('kd_pendidikan', 11)->nullable()->index('idx_kd_pendidikan');
            $table->string('jurusan', 100)->nullable()->index('idx_jurusan');
            $table->string('kategori', 4)->nullable()->index('idx_kategori');
            $table->string('tmt_penyesuaian', 11)->nullable()->index('idx_tmt_penyesuaian');
            $table->date('tanggal_ijazah')->nullable();
            $table->string('no_ijazah', 50)->nullable();
            $table->float('nilai_ipk', 10, 0)->nullable();
            $table->integer('f_cpns')->nullable();
            $table->text('dokumen')->nullable();
            $table->integer('status')->nullable()->comment('1: Belum diverifikasi; 2: Sudah diverifikasi');
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
        Schema::dropIfExists('riwayat_pendidikan');
    }
};
