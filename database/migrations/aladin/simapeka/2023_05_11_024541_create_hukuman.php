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
        Schema::connection('mysql2')->create('hukuman', function (Blueprint $table) {
            $table->id();
            $table->char('nomor_sk')->primary();
            $table->string('jenis_hukuman');
            $table->date('tmt');
            $table->date('tmt_hukuman');
            $table->date('mulai');
            $table->date('selesai');
            $table->string('dokumen');
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
        Schema::connection('mysql2')->dropIfExists('hukuman');
    }
};
