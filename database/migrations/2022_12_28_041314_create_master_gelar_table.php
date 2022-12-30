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
        Schema::create('master_gelar', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id_gelar', true);
            $table->string('gelar', 100);
            $table->string('keterangan', 100);
            $table->enum('kategori', ['d', 'b']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_gelar');
    }
};
