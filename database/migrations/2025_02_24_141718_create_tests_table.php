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
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained();
            $table->string('name');
            $table->float('weighing_factor');
            $table->decimal('lowest_passing_grade', 4, 1)->default(5.5)->check('best_grade >= 1 and best_grade <= 10');
            $table->decimal('best_grade', 3, 1)->nullable()->check('best_grade >= 1 and best_grade <= 10');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tests');
    }
};
