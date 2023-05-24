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
        Schema::connection('mysql2')->create('evaluasi', function (Blueprint $table) {
            $table->id();
            $table->char('kode_evaluasi')->primary();
            $table->string('hasil_kuesioner');
            $table->string('hasil_evaluasi');
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);

            $table->foreign('nomor_pelaksanaan')->references('nomor_pelaksanaan')->on('pelaksanaan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql2')->dropIfExists('evaluasi');
    }
};
