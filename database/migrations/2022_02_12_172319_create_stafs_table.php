<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStafsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stafs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('present_address');
            $table->string('parmanent_address');
            $table->string('national_id')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile_number');
            $table->string('gender');
            $table->unsignedBigInteger('staf_type');
            $table->foreign('staf_type')->references('id')->on('staf_types')->onDelete('cascade');
            $table->string('blood_group')->nullable();
            $table->string('ssc')->nullable();
            $table->string('ssc_result')->nullable();
            $table->string('hsc')->nullable();
            $table->string('hsc_result')->nullable();
            $table->string('hounars_subject')->nullable();
            $table->string('hounars_result')->nullable();
            $table->string('masters_subject')->nullable();
            $table->string('masters_result')->nullable();
            $table->string('image');
            $table->string('resume_image')->nullable();
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
        Schema::dropIfExists('stafs');
    }
}
