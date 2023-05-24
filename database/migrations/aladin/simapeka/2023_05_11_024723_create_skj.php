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
        Schema::connection('mysql2')->create('skj', function (Blueprint $table) {
            $table->id();
            $table->char('kode_skj')->primary();
            $table->string('nama_jabatan');
            $table->string('kelompok_jabatan');
            $table->string('urusan_pemerintahan');
            $table->string('kualifikasi_pendidikan');
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);

            $table->foreign('kode_jabatan')->references('kode_jabatan')->on('jabatan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql2')->dropIfExists('skj');
    }
};
