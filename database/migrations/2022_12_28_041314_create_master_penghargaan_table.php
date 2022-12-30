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
        Schema::create('master_penghargaan', function (Blueprint $table) {
            $table->comment('');
            $table->string('kd_penghargaan', 4)->nullable();
            $table->string('nama_penghargaan', 50)->nullable();
            $table->enum('pemberi', ['P', 'M', 'L'])->default('L');
            $table->integer('id_penghargaan', true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_penghargaan');
    }
};
