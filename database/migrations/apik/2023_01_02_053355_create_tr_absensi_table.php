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
        Schema::create('tr_absensi', function (Blueprint $table) {
            $table->comment('');
            $table->integer('abs_id', true);
            $table->integer('pegawai_id');
            $table->date('abs_tanggal');
            $table->integer('abs_mesin');
            $table->timestamp('abs_masuk')->nullable();
            $table->timestamp('abs_pulang')->nullable();
            $table->integer('abs_masuk_status');
            $table->integer('abs_pulang_status');
            $table->integer('abs_status');
            $table->integer('abs_masuk_lapor');
            $table->integer('abs_pulang_lapor');
            $table->integer('abs_lapor');
            $table->integer('abs_pinalty_masuk');
            $table->integer('abs_pinalty_pulang');
            $table->integer('abs_pinalty_absensi');
            $table->timestamp('created_date')->useCurrent();
            $table->string('created_by', 60);
            $table->timestamp('modified_date')->nullable();
            $table->string('modified_by', 60);
            $table->integer('record_active');
            $table->integer('in_ramadhan');
            $table->integer('absr_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tr_absensi');
    }
};
