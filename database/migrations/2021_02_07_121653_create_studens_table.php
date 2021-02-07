<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('branch');
            $table->string('prefix');
            $table->string('thai_name');
            $table->string('institute_resident');
            $table->string('eng_name');
            $table->string('sap');
            $table->string('doctor_cert');
            $table->string('id_cart');
            $table->string('member');
            $table->string('telaphone');
            $table->string('email');
            $table->string('year');
            $table->string('year_study');
            $table->string('remark');
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
