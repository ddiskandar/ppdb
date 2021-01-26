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
            $table->foreignId('student_id')->constrained()->onDelete('cascade');
            $table->foreignId('periode_id')->constrained();
            $table->foreignId('pilihan_satu')->nullable()->constrained('jurusans');
            $table->foreignId('pilihan_dua')->nullable()->constrained('jurusans');
            $table->foreignId('pilihan_lulus')->nullable()->constrained('jurusans');
            $table->boolean('join_wa')->default(false);
            $table->integer('payment_amount');
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
