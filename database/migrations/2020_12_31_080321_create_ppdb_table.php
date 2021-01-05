<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePpdbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ppdb', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id');
            $table->foreignId('periode_id');
            $table->foreignId('pilihan_satu')->nullable();
            $table->foreignId('pilihan_dua')->nullable();
            $table->integer('payment_amount');
            $table->boolean('pilihan_satu_pass')->default(false);
            $table->boolean('pilihan_dua_pass')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ppdb');
    }
}
