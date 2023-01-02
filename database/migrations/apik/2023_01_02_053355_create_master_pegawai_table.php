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
        Schema::create('master_pegawai', function (Blueprint $table) {
            $table->comment('');
            $table->integer('pegawai_id');
            $table->integer('id_profil');
            $table->string('pegawai_nip', 20);
            $table->string('pegawai_nama', 200);
            $table->timestamp('created_date')->useCurrent();
            $table->string('created_by', 200);
            $table->timestamp('modified_date')->nullable();
            $table->string('modified_by', 200);
            $table->integer('record_active');
            $table->integer('id_organisasi');
            $table->integer('id_finger');
            $table->integer('kedudukan_pns');
            $table->integer('status_pegawai');
            $table->string('nama_profil', 200);
            $table->integer('is_guru');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_pegawai');
    }
};
