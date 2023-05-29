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
        Schema::connection('mysql2')->create('jalur_pengembangan_dan_konversijp', function (Blueprint $table) {
            $table->id();
            $table->char('kode_jalur_pengembangan')->primary();
            $table->string('nama_jalur_pengembangan');
            $table->char('satuan');
            $table->integer('konversi_jp_nasional');
            $table->integer('konversi_jp_internasional');
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql2')->dropIfExists('jalur_pengembangan_dan_konversijp');
    }
};
