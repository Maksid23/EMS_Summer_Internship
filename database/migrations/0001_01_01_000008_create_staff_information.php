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
        Schema::create('staff_information', function (Blueprint $table) {
            $table->id('staff_id');
            $table->unsignedBigInteger('user_id');
            $table->string('staff_name',50);
            $table->enum('gender',["M","F","O"]);
            $table->integer('contact_number');
            $table->string('email');
            $table->text('address');
            $table->string('designation');
            $table->string('department');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff_information');
    }
};
