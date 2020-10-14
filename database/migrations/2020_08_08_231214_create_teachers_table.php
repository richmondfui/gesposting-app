<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('district_id');
            $table->unsignedBigInteger('school_id')->nullable();
            $table->string('title');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('othername')->nullable();
            $table->string('gender');
            $table->string('dob');
            $table->string('marital_status');
            $table->string('nationality');
            $table->string('residential_address');
            $table->string('email')->unique();
            $table->string('mobile_number');
            $table->string('ssnit_number');
            $table->string('college_attended');
            $table->string('college_location');
            $table->date('college_from');
            $table->date('college_to');
            $table->text('college_certificate');
            $table->string('course_offered');
            $table->string('staff_id')->unique();
            $table->string('registered_number')->unique();
            $table->timestamps();

            $table->foreign('district_id')
                    ->references('id')->on('districts')
                    ->onDelete('cascade');

            $table->foreign('school_id')
                    ->references('id')->on('schools')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
