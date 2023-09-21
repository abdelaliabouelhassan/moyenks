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
        Schema::create('form_data', function (Blueprint $table) {
            $table->id();
            $table->string('imie_nazwisko')->nullable();
            $table->string('email')->nullable();
            $table->string('ulicanr')->nullable();
            $table->string('miasto')->nullable();
            $table->string('kodpocztowy')->nullable();
            $table->string('model')->nullable();
            $table->string('suma')->nullable();
            $table->string('sposob')->nullable();
            $table->string('date')->nullable();
            $table->string('pdf')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_data');
    }
};
