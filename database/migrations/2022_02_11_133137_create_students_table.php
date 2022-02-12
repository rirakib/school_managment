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
            $table->string('unique_id')->unique();
            $table->string('name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('birth_certificate_number');
            $table->string('present_address');
            $table->string('parmanent_address');
            $table->string('mobile_number');
            $table->string('family_income');
            $table->string('total_family_member');
            $table->string('father_id')->nullable();
            $table->date('date_of_birth');
            $table->string('mother_id')->nullable();
            $table->string('gender');
            $table->string('blood_group')->nullable();
            $table->string('admission_class');
            $table->string('group')->nullable();
            $table->string('student_types');
            $table->string('shift')->nullable();
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
