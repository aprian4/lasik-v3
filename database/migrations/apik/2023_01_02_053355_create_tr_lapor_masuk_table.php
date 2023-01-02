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
        Schema::create('tr_lapor_masuk', function (Blueprint $table) {
            $table->comment('');
            $table->integer('abs_id', true);
            $table->integer('lm_lapor');
            $table->integer('lm_approval_al');
            $table->integer('lm_approval_by_al');
            $table->integer('lm_pinalty_al');
            $table->integer('lm_approval_aa');
            $table->integer('lm_approval_by_aa');
            $table->integer('lm_pinalty_aa');
            $table->string('lm_dokumen', 500);
            $table->timestamp('created_date')->useCurrent();
            $table->string('created_by', 60);
            $table->timestamp('modified_date')->nullable();
            $table->string('modified_by', 60);
            $table->integer('record_active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tr_lapor_masuk');
    }
};
