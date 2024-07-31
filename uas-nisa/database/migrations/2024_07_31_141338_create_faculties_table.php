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
    Schema::create('faculties', function (Blueprint $table) {
        $table->id();
        $table->string('lecturer_code')->unique();
        $table->string('lecturer_name');
        $table->string('study_program');
        $table->string('campus_base');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faculties');
    }
};
