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
        Schema::create('master_kategori_diklat_teknis', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id_kategori_diklat_teknis', true);
            $table->string('kategori_diklat_teknis', 16);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_kategori_diklat_teknis');
    }
};
