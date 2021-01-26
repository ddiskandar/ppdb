<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->boolean('name_verified')->default(false);
            $table->string('panggilan', 20)->nullable();
            $table->char('jk', 1)->nullable();
            $table->char('nisn', 10)->nullable();
            $table->char('nik', 16)->nullable();
            $table->char('kk', 16)->nullable();
            $table->string('birthplace', 50)->nullable();
            $table->date('birthdate')->nullable();
            $table->string('akta', 16)->nullable();
            $table->foreignId('agama_id')->default(1);
            $table->string('address')->nullable();
            $table->string('rt', 3)->nullable();
            $table->string('rw', 3)->nullable();
            $table->string('desa', 24)->nullable();
            $table->string('kecamatan', 24)->nullable();
            $table->string('kab', 24)->nullable();
            $table->string('prov', 24)->nullable();
            $table->string('kode_pos', 6)->nullable();
            $table->string('lintang', 24)->nullable();
            $table->string('bujur', 24)->nullable();
            $table->foreignId('tinggal_id')->default(1);
            $table->foreignId('transportasi_id')->default(1);
            $table->unsignedTinyInteger('anak_ke')->nullable();
            $table->unsignedTinyInteger('saudara')->nullable();
            $table->string('phone', 16)->nullable();

            $table->foreignId('school_id')->default(1);
            $table->string('school_temp')->nullable();
            $table->boolean('school_verified')->default(false);

            $table->foreignId('hobby_id')->default(1);
            $table->foreignId('cita_id')->default(1);

            $table->unsignedTinyInteger('tinggi')->nullable();
            $table->unsignedTinyInteger('berat')->nullable();
            $table->unsignedTinyInteger('lingkar_kepala')->nullable();

            $table->unsignedInteger('jarak')->nullable();
            $table->unsignedInteger('waktu')->nullable();

            $table->string('pdu', 3)->nullable();
            $table->string('olahraga', 3)->nullable();
            $table->string('jas', 3)->nullable();
            
            $table->text('prestasi')->nullable();
            $table->text('desc_keluarga')->nullable();
            $table->text('desc_student')->nullable();
            $table->text('catatan')->nullable();
            $table->foreignId('pip_id')->default(1);

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
        Schema::dropIfExists('students');
    }
}
