<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentLettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment_letters', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('teacher_id');
            $table->string('letter_head');
            $table->text('letter_body');
            $table->string('cc');
            $table->string('district_name');
            $table->string('district_director');
            $table->string('district_address');
            $table->string('district_phone');
            $table->string('district_email');
            $table->string('district_ref');
            $table->string('college_attended');
            $table->string('college_location');
            $table->string('school');
            $table->date('date_posted');
            $table->timestamps();

            $table->foreign('teacher_id')
                ->references('id')->on('teachers')
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
        Schema::dropIfExists('appointment_letters');
    }
}
