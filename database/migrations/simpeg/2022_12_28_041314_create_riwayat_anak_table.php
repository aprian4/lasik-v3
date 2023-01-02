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
        Schema::create('riwayat_anak', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id_anak', true);
            $table->integer('id_identitas')->default(0);
            $table->integer('id_pasangan')->nullable();
            $table->dateTime('create_date')->nullable()->useCurrent();
            $table->string('create_op', 20)->nullable();
            $table->dateTime('update_date')->nullable()->useCurrent();
            $table->string('update_op', 20)->nullable();
            $table->string('nama', 100)->nullable();
            $table->string('tempat_lahir', 50)->nullable();
            $table->string('tunjangan', 1)->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->enum('keterangan', ['', 'k', 't', 'a'])->nullable()->default('');
            $table->enum('gender', ['p', 'w'])->nullable();
            $table->text('status_pendidikan_anak')->nullable();
            $table->text('akta_meninggal')->nullable();
            $table->date('tanggal_meninggal')->nullable();
            $table->text('dokumen')->nullable();
            $table->integer('status')->nullable()->default(0)->comment('1: Belum diverifikasi; 2: Sudah diverifikasi');
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
        Schema::dropIfExists('riwayat_anak');
    }
};
