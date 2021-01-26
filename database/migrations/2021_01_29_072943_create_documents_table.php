<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained();
            $table->string('akta')->nullable();
            $table->string('kartu_keluarga')->nullable();
            $table->string('skl')->nullable();
            $table->string('ijazah')->nullable();
            $table->string('nomor_ujian', 24)->nullable();
            $table->string('nomor_ijazah', 24)->nullable();
            $table->string('kks')->nullable();
            $table->string('no_kks', 16)->nullable();
            $table->string('kip')->nullable();
            $table->string('no_kip', 16)->nullable();
            $table->string('kis')->nullable();
            $table->string('no_kis', 16)->nullable();
            $table->string('pkh')->nullable();
            $table->string('no_pkh', 16)->nullable();
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
        Schema::dropIfExists('documents');
    }
}
