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
            $table->foreignId('school_id')->nullable();
            $table->boolean('school_verified')->default(false);
            $table->boolean('name_verified')->default(false);
            $table->char('nik', 16)->nullable();
            $table->string('panggilan', 20)->nullable();
            $table->char('jk', 1)->nullable();
            $table->string('birthplace', 50)->nullable();
            $table->date('birthdate')->nullable();
            $table->char('nisn', 10)->nullable();
            $table->string('agama', 16)->nullable();
            $table->string('suku', 16)->nullable();
            $table->tinyInteger('anak_ke')->nullable();
            $table->tinyInteger('saudara')->nullable();
            $table->string('phone', 16)->nullable();
            $table->string('address')->nullable();
            $table->string('rt', 3)->nullable();
            $table->string('rw', 3)->nullable();
            $table->string('desa', 24)->nullable();
            $table->string('kecamatan', 24)->nullable();
            $table->string('city', 24)->nullable();
            $table->string('province', 24)->nullable();
            $table->string('zip', 6)->nullable();
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
            $table->string('kks', 16)->nullable();
            $table->string('pkh', 16)->nullable();
            $table->string('kip', 16)->nullable();
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
