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
        Schema::create('riwayat_jabatan_lama', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id_riwayat_jabatan', true);
            $table->unsignedInteger('id_identitas')->default(0)->index('nip');
            $table->dateTime('create_date')->nullable()->useCurrent();
            $table->string('create_op', 20)->nullable();
            $table->dateTime('update_date')->nullable()->useCurrent();
            $table->string('update_op', 20)->nullable();
            $table->string('kd_tipe_jabatan', 20)->default('0');
            $table->char('kd_jenis_jabatan', 2)->default('')->index('idx_kd_jenis_jabatan');
            $table->string('kd_jabatan', 25)->default('')->index('idx_kd_jabatan');
            $table->char('kd_eselon', 2)->default('00')->index('kd_eselon');
            $table->char('kd_fungsional', 2)->default('00')->index('idx_kd_fungsional');
            $table->date('tmt')->nullable()->index('idx_tmt');
            $table->date('tmt_eselon')->nullable()->index('idx_tmt_eselon');
            $table->date('pak')->nullable()->index('idx_pak');
            $table->date('tmt_pak')->nullable()->index('idx_tmt_pak');
            $table->date('tmt_pak2')->nullable();
            $table->string('kd_instansi', 15)->default('')->index('idx_kd_instansi');
            $table->string('kd_organisasi', 15)->default('')->index('idx_kd_organisasi');
            $table->string('kd_satuan_organisasi', 15)->default('')->index('idx_kd_satuan_organisasi');
            $table->string('kd_unit_organisasi', 15)->default('')->index('idx_kd_unit_organisasi');
            $table->date('mytmt')->nullable()->index('idx_mytmt');
            $table->string('kd_unit_kerja', 15)->default('')->index('idx_kd_unit_kerja');
            $table->string('no_sk', 40)->index('idx_no_sk');
            $table->date('tanggal')->nullable()->index('idx_tanggal');
            $table->string('penjabat', 50)->index('idx_penjabat');
            $table->date('tmt_mutasi_internal')->nullable();
            $table->string('keterangan_fungsional');
            $table->string('sk_mutasi_internal');
            $table->text('dokumen');
            $table->integer('status')->comment('1: Belum diverifikasi; 2: Sudah diverifikasi');

            $table->index(['kd_jabatan'], 'kd_jabatan');
            $table->index(['id_identitas'], 'id_identitas');
            $table->index(['kd_organisasi'], 'kd_organisasi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayat_jabatan_lama');
    }
};
