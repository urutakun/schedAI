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
        Schema::create('instructor_assignments', function (Blueprint $table) {
            $table->id();

            $table->string('instr_id');
            $table->foreign('instr_id')
                ->references('instr_id')
                ->on('instructors')
                ->onDelete('cascade');

            $table->string('sub_id');
            $table->foreign('sub_id')
                ->references('sub_id')
                ->on('subjects')
                ->onDelete('cascade');

            $table->string('sect_id');
            $table->foreign('sect_id')
                ->references('sect_id')
                ->on('class_sections')
                ->onDelete('cascade');


            $table->integer('semester');
            $table->year('year');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instructor_assignments');
    }
};
