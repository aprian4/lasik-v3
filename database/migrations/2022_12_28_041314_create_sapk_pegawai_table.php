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
        Schema::create('sapk_pegawai', function (Blueprint $table) {
            $table->comment('');
            $table->increments('idp');
            $table->char('pns_id', 32)->nullable()->unique('pns_id');
            $table->char('nip_baru', 18)->nullable()->index('nip_baru');
            $table->string('nip_lama', 20)->nullable();
            $table->string('nama', 100)->nullable();
            $table->string('gelar_depan', 50)->nullable();
            $table->string('gelar_blk', 50)->nullable();
            $table->char('tempat_lahir_id', 32)->nullable();
            $table->string('tempat_lahir_nama', 50)->nullable();
            $table->char('tgl_lahir', 10)->nullable();
            $table->enum('jenis_kelamin', ['F', 'M'])->nullable();
            $table->boolean('agama_id')->nullable();
            $table->char('agama_nama', 20)->nullable();
            $table->boolean('jenis_kawin_id')->nullable();
            $table->char('jenis_kawin_nama', 20)->nullable();
            $table->string('nik', 20)->nullable();
            $table->string('nomor_hp', 50)->nullable();
            $table->string('email', 50)->nullable();
            $table->text('alamat')->nullable();
            $table->string('npwp_nomor', 30)->nullable();
            $table->string('bpjs', 30)->nullable();
            $table->string('jenis_pegawai_id', 2)->nullable();
            $table->text('jenis_pegawai_nama')->nullable();
            $table->string('kedudukan_hukum_id', 2)->nullable();
            $table->string('kedudukan_hukum_nama', 50)->nullable();
            $table->enum('status_cpns_pns', ['C', 'P'])->nullable();
            $table->string('kartu_pegawai', 30)->nullable();
            $table->string('nomor_sk_cpns', 50)->nullable();
            $table->string('tgl_sk_cpns', 10)->nullable();
            $table->string('tmt_cpns', 10)->nullable();
            $table->string('nomor_sk_pns', 50)->nullable();
            $table->string('tgl_sk_pns', 10)->nullable();
            $table->string('tmt_pns', 10)->nullable();
            $table->string('gol_awal_id', 2)->nullable();
            $table->string('gol_awal_nama', 10)->nullable();
            $table->string('gol_id', 2)->nullable();
            $table->string('gol_nama', 10)->nullable();
            $table->string('tmt_golongan', 10)->nullable();
            $table->string('mk_tahun', 4)->nullable();
            $table->string('mk_bulan', 2)->nullable();
            $table->string('jenis_jabatan_id', 1)->nullable();
            $table->string('jenis_jabatan_nama', 100)->nullable();
            $table->char('jabatan_id', 32)->nullable();
            $table->string('jabatan_nama', 100)->nullable();
            $table->string('tmt_jabatan', 10)->nullable();
            $table->string('tingkat_pendidikan_id', 2)->nullable();
            $table->string('tingkat_pendidikan_nama', 50)->nullable();
            $table->char('pendidikan_id', 32)->nullable();
            $table->string('pendidikan_nama', 100)->nullable();
            $table->string('tahun_lulus', 4)->nullable();
            $table->char('kpkn_id', 32)->nullable();
            $table->string('kpkn_nama', 100)->nullable();
            $table->char('lokasi_kerja_id', 32)->nullable();
            $table->string('lokasi_kerja_nama', 100)->nullable();
            $table->char('unor_id', 32)->nullable();
            $table->string('unor_nama', 200)->nullable();
            $table->char('unor_induk_id', 32)->nullable();
            $table->string('unor_induk_nama', 200)->nullable();
            $table->char('instansi_induk_id', 32)->nullable();
            $table->string('instansi_induk_nama', 50)->nullable();
            $table->char('instansi_kerja_id', 32)->nullable();
            $table->string('instansi_kerja_nama', 100)->nullable();
            $table->char('satuan_kerja_induk_id', 32)->nullable();
            $table->string('satuan_kerja_induk_nama', 100)->nullable();
            $table->char('satuan_kerja_kerja_id', 32)->nullable();
            $table->string('satuan_kerja_kerja_nama', 100)->nullable();
            $table->timestamp('last_update')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sapk_pegawai');
    }
};
