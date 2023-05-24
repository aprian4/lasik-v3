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
        Schema::connection('mysql2')->create('kompetensi', function (Blueprint $table) {
            $table->id();
            $table->char('kode_kompetensi')->primary();
            $table->string('nama_jabatan');
            $table->string('jenis_kompetensi');
            $table->string('nama_kompetensi');
            $table->string('level');
            $table->string('deskripsi');
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);

            $table->foreign('kode_skj')->references('kode_skj')->on('skj');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql2')->dropIfExists('kompetensi');
    }
};
