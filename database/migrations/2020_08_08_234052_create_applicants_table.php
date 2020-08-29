<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->string('code');
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
            $table->string('ghanaian_lang_1');
            $table->string('ghanaian_lang_2');
            $table->string('ghanaian_lang_3')->nullable();
            $table->string('college_attended');
            $table->date('college_from');
            $table->date('college_to');
            $table->text('college_certificate');
            $table->string('course_offered');
            $table->string('staff_id')->unique();
            $table->string('registered_number')->unique();
            $table->string('region_1');
            $table->string('region_2');
            $table->string('region_3')->nullable();
            $table->string('status')->default('pending');
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
        Schema::dropIfExists('applicants');
    }
}
