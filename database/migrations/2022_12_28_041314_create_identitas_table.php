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
        Schema::create('identitas', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id_identitas', true);
            $table->integer('kd_status_pegawai')->index('kd_status_pegawai');
            $table->string('nip', 21)->unique('nip');
            $table->string('nip_lama', 11)->index('nip_lama');
            $table->string('tempat_lhr', 50);
            $table->date('tanggal_lhr');
            $table->integer('id_agama')->index('id_agama');
            $table->enum('gender', ['p', 'w'])->index('gender');
            $table->string('alamat_rtrw', 20);
            $table->string('ktp', 50);
            $table->string('askes', 30);
            $table->string('taspen', 50);
            $table->string('alamat_kelurahan', 30);
            $table->string('alamat_kecamatan', 30);
            $table->string('alamat_jalan', 100);
            $table->string('alamat_desa', 100);
            $table->string('alamat_kabkota', 100);
            $table->date('tmt_kgb');
            $table->string('kartu_pegawai', 10);
            $table->string('kpe', 18);
            $table->string('golongan_darah', 3);
            $table->string('status_kawin', 20)->index('status_kawin');
            $table->string('npwp', 21);
            $table->integer('id_suku');
            $table->string('hp1', 20)->nullable()->index('hp1');
            $table->string('hp2', 20)->nullable()->index('hp2');
            $table->string('email1', 50)->nullable()->index('email1');
            $table->string('foto')->nullable()->default('default.png')->index('foto');
            $table->string('nama', 100)->index('nama');
            $table->integer('gelar_dp');
            $table->integer('gelar_bl');
            $table->enum('flag', ['0', '1']);
            $table->string('email2', 50)->nullable()->index('email2');
            $table->text('alamat_temp');
            $table->date('tgl_skmulaikerja');
            $table->date('tgl_tmtcpns');
            $table->date('tgl_tmtpns');
            $table->enum('sumpah', ['y', 'n']);
            $table->integer('id_statuskepegawaian')->index('id_statuskepegawaian');
            $table->integer('kd_jenis_pegawai')->index('kd_jenis_pegawai');
            $table->integer('create_op');
            $table->dateTime('create_tgl');
            $table->dateTime('update_tgl');
            $table->integer('update_op');
            $table->string('kd_instansi_induk', 15);
            $table->integer('gelar_gb2');
            $table->integer('gelar_gb3');
            $table->integer('gelar_gb4');
            $table->date('kp_selanjutnya');
            $table->string('idlokasi');
            $table->string('bapertarum', 50)->nullable();
            $table->string('kedudukan_pns', 5);
            $table->string('no_sumpah', 50);
            $table->text('domisili');
            $table->integer('tinggi_badan');
            $table->integer('berat_badan');
            $table->text('dokumen');
            $table->integer('status')->index('status')->comment('1: Belum diverifikasi; 2: Sudah diverifikasi');
            $table->boolean('rec_deleted')->unsigned()->default(false)->index('rec_deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('identitas');
    }
};
