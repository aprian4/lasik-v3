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
        Schema::connection('mysql2')->create('pelaksanaan', function (Blueprint $table) {
            $table->id();
            $table->char('nomor_pelaksanaan')->primary();
            $table->string('bukti_kegiatan');
            $table->string('surat_persetujuan');
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);

            $table->foreign('kode_perencanaan')->references('kode_perencanaan')->on('perencanaan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql2')->dropIfExists('pelaksanaan');
    }
};
