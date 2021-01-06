<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrtusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ortus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id');
            $table->char('ayah_nik', 16)->nullable();
            $table->string('ayah_nama')->nullable();
            $table->char('ayah_lahir', 4)->nullable();
            $table->string('ayah_pendidikan', 16)->nullable();
            $table->string('ayah_pekerjaan')->nullable();
            $table->string('ayah_penghasilan')->nullable();
            $table->char('ibu_nik', 16)->nullable();
            $table->string('ibu_nama')->nullable();
            $table->char('ibu_lahir', 4)->nullable();
            $table->string('ibu_pendidikan', 16)->nullable();
            $table->string('ibu_pekerjaan')->nullable();
            $table->string('ibu_penghasilan')->nullable();
            $table->char('wali_nik', 16)->nullable();
            $table->string('wali_nama')->nullable();
            $table->char('wali_lahir', 4)->nullable();
            $table->string('wali_pendidikan', 16)->nullable();
            $table->string('wali_pekerjaan')->nullable();
            $table->string('wali_penghasilan')->nullable();
            $table->string('phone_ortu', 16)->nullable();
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
        Schema::dropIfExists('ortus');
    }
}
