<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('staff_student', function (Blueprint $table) {
        $table->unsignedBigInteger('staff_id');
        $table->unsignedBigInteger('student_id');
        $table->unique(['staff_id', 'student_id']);
        $table->foreign('staff_id')->references('id')->on('staff');
        $table->foreign('student_id')->references('id')->on('students');
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff_students');
    }
};
