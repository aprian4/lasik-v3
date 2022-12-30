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
        Schema::create('riwayat_skp', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id_rskp', true);
            $table->float('nilai_total', 10, 0)->nullable();
            $table->float('nilai_rata', 10, 0)->nullable();
            $table->integer('kd_jenis_jabatan');
            $table->integer('tahun');
            $table->float('nilai_skp', 10, 0);
            $table->float('nilai_rata_skp', 10, 0);
            $table->float('nilai_orientasi_pelayanan', 10, 0);
            $table->float('nilai_komitmen', 10, 0);
            $table->float('nilai_kerjasama', 10, 0);
            $table->float('nilai_integritas', 10, 0);
            $table->float('nilai_disiplin', 10, 0);
            $table->float('nilai_kepemimpinan', 10, 0)->nullable();
            $table->float('nilai_perilaku_kerja', 10, 0);
            $table->float('nilai_rata_perilaku_kerja', 10, 0);
            $table->float('nilai_prestasi_kerja', 10, 0);
            $table->string('sebutan', 20);
            $table->integer('id_identitas');
            $table->dateTime('create_date')->nullable()->useCurrent();
            $table->string('create_op', 20)->nullable();
            $table->dateTime('update_date')->nullable()->useCurrent();
            $table->string('update_op', 20)->nullable();
            $table->string('penjabat', 100);
            $table->string('atasan_penjabat', 100);
            $table->text('dokumen')->nullable();
            $table->integer('status')->comment('1: Belum diverifikasi; 2: Sudah diverifikasi');
            $table->text('keterangan_tolak')->nullable();
            $table->text('data_temp')->nullable();
            $table->tinyInteger('status_ubah')->nullable();
            $table->string('nip_penilai', 18)->nullable();
            $table->string('nama_penilai', 100);
            $table->string('unor_penilai', 100)->nullable();
            $table->string('gol_penilai', 10)->nullable();
            $table->date('tmt_gol_penilai')->nullable();
            $table->string('status_penilai', 9)->nullable();
            $table->string('nip_atasan_penilai', 18)->nullable();
            $table->string('nama_atasan_penilai', 100);
            $table->string('gol_atasan_penilai', 10)->nullable();
            $table->date('tmt_gol_atasan_penilai')->nullable();
            $table->string('status_atasan_penilai', 9)->nullable();
            $table->string('jenisJabatan', 1)->nullable();
            $table->string('unor_atasan_penilai', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayat_skp');
    }
};
