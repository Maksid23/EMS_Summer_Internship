<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('class', function (Blueprint $table) {
            $table->id('class_id');
            $table->string('class_name');
            $table->text('class_teacher');
            $table->unsignedBigInteger('institute_id');
            $table->foreign('institute_id')->references('institute_id')->on('institute')->onDelete('cascade');
            $table->text('location');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('class');
    }
};
