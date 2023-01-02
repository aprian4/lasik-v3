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
        Schema::create('master_liburan', function (Blueprint $table) {
            $table->comment('');
            $table->integer('libur_id', true);
            $table->date('libur_tanggal');
            $table->string('libur_keterangan', 200);
            $table->timestamp('created_date')->useCurrent();
            $table->string('created_by', 200)->nullable();
            $table->timestamp('modified_date')->nullable();
            $table->string('modified_by', 200);
            $table->integer('record_active')->default(1);
            $table->integer('is_cuti_bersama');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_liburan');
    }
};
