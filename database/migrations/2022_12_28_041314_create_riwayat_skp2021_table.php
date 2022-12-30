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
        Schema::create('riwayat_skp2021', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id_rskp', true);
            $table->integer('kd_jenis_jabatan');
            $table->integer('tahun');
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
            $table->float('nilai_skp_30', 10, 0)->nullable();
            $table->float('nilai_skp_30_rata', 10, 0)->nullable();
            $table->float('nilai_orientasi_pelayanan_30', 10, 0)->nullable();
            $table->float('nilai_komitmen_30', 10, 0)->nullable();
            $table->float('nilai_kerjasama_30', 10, 0)->nullable();
            $table->float('nilai_kepemimpinan_30', 10, 0)->nullable();
            $table->float('nilai_inisiatif_kerja_30', 10, 0)->nullable();
            $table->float('nilai_perilaku_kerja_30', 10, 0)->nullable();
            $table->float('nilai_perilaku_kerja_30_rata', 10, 0)->nullable();
            $table->float('nilai_prestasi_kerja_30', 10, 0)->nullable();
            $table->float('nilai_konversi_30', 10, 0)->nullable();
            $table->string('sebutan_30', 20)->nullable();
            $table->float('nilai_skp_46', 10, 0)->nullable();
            $table->float('nilai_skp_46_rata', 10, 0)->nullable();
            $table->float('nilai_orientasi_pelayanan_46', 10, 0)->nullable();
            $table->float('nilai_komitmen_46', 10, 0)->nullable();
            $table->float('nilai_kerjasama_46', 10, 0)->nullable();
            $table->float('nilai_integritas_46', 10, 0)->nullable();
            $table->float('nilai_disiplin_46', 10, 0)->nullable();
            $table->float('nilai_kepemimpinan_46', 10, 0)->nullable();
            $table->float('nilai_perilaku_kerja_46', 10, 0)->nullable();
            $table->float('nilai_perilaku_kerja_46_rata', 10, 0)->nullable();
            $table->float('nilai_prestasi_kerja_46', 10, 0)->nullable();
            $table->float('nilai_konversi_46', 10, 0)->nullable();
            $table->string('sebutan_46', 20)->nullable();
            $table->float('nilai_integrasi', 10, 0)->nullable();
            $table->string('predikat', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayat_skp2021');
    }
};
