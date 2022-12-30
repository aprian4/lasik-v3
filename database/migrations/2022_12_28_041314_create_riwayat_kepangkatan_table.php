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
        Schema::create('riwayat_kepangkatan', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id_kepangkatan', true);
            $table->string('no_sk', 40)->index('idx_no_sk');
            $table->date('tanggal')->nullable()->index('idx_tanggal');
            $table->string('penjabat', 100)->index('idx_penjabat');
            $table->integer('id_identitas')->index('id_identitas');
            $table->dateTime('create_date')->nullable()->useCurrent()->index('idx_create_dete');
            $table->string('create_op', 20)->nullable()->index('idx_create_op');
            $table->dateTime('update_date')->nullable()->useCurrent()->index('idx_update_date');
            $table->string('update_op', 20)->nullable()->index('idx_update_op');
            $table->integer('id_golongan')->index('id_golongan');
            $table->date('tmt')->nullable()->index('idx_tmt');
            $table->text('keterangan');
            $table->integer('id_sk')->nullable()->index('id_sk');
            $table->integer('tahun')->nullable();
            $table->integer('bulan')->nullable();
            $table->date('tmt_golongan')->nullable();
            $table->string('no_bkn', 20)->nullable();
            $table->date('tgl_bkn')->nullable();
            $table->string('jenis_kp', 50)->nullable();
            $table->text('dokumen')->nullable();
            $table->integer('status')->index('status')->comment('1: Belum diverifikasi; 2: Sudah diverifikasi');
            $table->text('keterangan_tolak')->nullable();
            $table->text('data_temp')->nullable();
            $table->tinyInteger('status_ubah')->nullable();
            $table->float('jumlah_kredit_utama', 10, 0)->nullable();
            $table->float('jumlah_kredit_tambahan', 10, 0)->nullable();

            $table->index(['id_identitas'], 'idx_id_identitas');
            $table->index(['id_golongan'], 'idx_id_golongan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayat_kepangkatan');
    }
};
