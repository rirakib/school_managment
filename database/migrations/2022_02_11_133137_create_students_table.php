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
            $table->string('name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('birth_certificate_number');
            $table->string('present_address');
            $table->string('parmanent_address');
            $table->string('mobile_number');
            $table->string('father_id')->nullable();
            $table->date('date_of_birth');
            $table->string('mother_id')->nullable();
            $table->string('gender');
            $table->string('blood_group')->nullable();
            $table->unsignedBigInteger('admission_class');
            $table->foreign('admission_class')->references('id')->on('stu_classes')->onDelete('cascade');
            $table->unsignedBigInteger('group')->nullable();
            $table->foreign('group')->references('id')->on('groups')->onDelete('cascade');
            $table->unsignedBigInteger('student_types');
            $table->foreign('student_types')->references('id')->on('student_types')->onDelete('cascade');
            $table->unsignedBigInteger('shift')->nullable();
            $table->foreign('shift')->references('id')->on('shifts')->onDelete('cascade');
            $table->string('psc_result')->nullable();
            $table->string('jsc_result')->nullable();
            $table->string('birth_image');
            $table->string('image');
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
