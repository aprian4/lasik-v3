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
        Schema::create('master_tingkat', function (Blueprint $table) {
            $table->comment('');
            $table->integer('kode_tingkat', true);
            $table->integer('id_tingkat')->index('idx_id_tingkat');
            $table->string('tingkat', 100)->index('idx_tingkat');
            $table->integer('max')->index('idx_max_pangkat');
            $table->integer('min')->index('idx_min_pangkat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_tingkat');
    }
};
