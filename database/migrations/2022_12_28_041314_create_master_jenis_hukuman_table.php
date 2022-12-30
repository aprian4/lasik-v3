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
        Schema::create('master_jenis_hukuman', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id', true);
            $table->string('kode', 3);
            $table->text('nama');
            $table->integer('id_tingkat_hukuman');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_jenis_hukuman');
    }
};
