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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('year');
            $table->string('phone');
            $table->string('password');
//            $table->bigInteger('specializations_id')->unsigned();
//            $table->foreignId('specialization_id')->references('id')->on('specializations')->onDelete('cascade')->onUpdate('cascade');
//            $table->foreignId('teacher_id')->references('id')->on('teachers')->onDelete('cascade')->onUpdate('cascade');
            $table->string('Passport_ID_Student');
            $table->string('image')->nullable();
            $table->string('message')->nullable();
            $table->softDeletes();
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
};
