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
        Schema::create('subjects', function (Blueprint $table) {
            $table->string('sub_id')->primary();

            $table->string('crs_id');
            $table->foreign('crs_id')
                ->references('crs_id')
                ->on('courses')
                ->onDelete('cascade');

            $table->string('sub_name');
            $table->integer('hours');
            $table->integer('year_level');
            $table->string('semester');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
