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
        Schema::create('riwayat_jabatan', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id_riwayat_jabatan', true);
            $table->unsignedInteger('id_identitas')->default(0)->index('nip');
            $table->unsignedInteger('kd_jenis_jabatan')->nullable()->default(0)->index('idx_kd_jenis_jabatan');
            $table->string('kd_jabatan', 25)->nullable()->index('idx_kd_jabatan');
            $table->string('no_sk_jabatan', 50)->nullable();
            $table->date('tgl_sk_jabatan')->nullable()->index('idx_tmt');
            $table->date('tmt_jabatan')->nullable()->index('idx_tmt_eselon');
            $table->string('pejabat', 50)->nullable();
            $table->string('kd_instansi', 15)->nullable()->index('idx_kd_instansi');
            $table->string('kd_organisasi', 15)->nullable()->index('idx_kd_organisasi');
            $table->string('tahun', 4)->nullable()->index('tahun');
            $table->string('bulan', 2)->nullable()->index('bulan');
            $table->string('kd_satuan_organisasi', 15)->nullable()->index('idx_kd_satuan_organisasi');
            $table->string('kd_unit_organisasi', 15)->nullable()->index('idx_kd_unit_organisasi');
            $table->string('kd_unit_kerja', 15)->nullable()->index('idx_kd_unit_kerja');
            $table->string('no_spmt', 50)->nullable()->index('idx_no_sk');
            $table->date('tgl_spmt')->nullable()->index('idx_tanggal');
            $table->date('tmt_mutasi_internal')->nullable();
            $table->string('sk_mutasi_internal')->nullable();
            $table->integer('keterangan')->nullable()->index('keterangan');
            $table->dateTime('create_date')->nullable()->useCurrent();
            $table->string('create_op', 20)->nullable();
            $table->dateTime('update_date')->nullable()->useCurrent();
            $table->string('update_op', 20)->nullable();
            $table->text('dokumen')->nullable();
            $table->integer('status')->nullable()->default(0)->index('status')->comment('1: Belum diverifikasi; 2: Sudah diverifikasi');
            $table->text('keterangan_tolak')->nullable();
            $table->text('data_temp')->nullable();
            $table->tinyInteger('status_ubah')->nullable()->index('status_ubah');
            $table->integer('status_tambahan')->nullable()->index('status_tambahan')->comment('1: Aktif; 2: Tidak aktif');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayat_jabatan');
    }
};
