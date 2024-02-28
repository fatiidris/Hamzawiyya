<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string('class_name');
            $table->integer('class_numeric');
            $table->unsignedBigInteger('teacher_name');
            $table->string('class_description');
            $table->timestamps();

            // Foreign key relationship
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('classes');
    }
};
