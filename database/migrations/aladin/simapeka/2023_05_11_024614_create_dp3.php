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
        Schema::connection('mysql2')->create('dp3', function (Blueprint $table) {
            $table->id();
            $table->integer('tahun');
            $table->string('pejabat_penilai');
            $table->string('atasan_pejabat_penilai');
            $table->string('total_nilai');
            $table->float('rata_rata');
            $table->string('sebutan');
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);

            $table->foreign('nip_pegawai')->references('nip')->on('pegawai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql2')->dropIfExists('dp3');
    }
};
