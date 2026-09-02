<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropUnique('courses_area_id_unique');
            $table->dropUnique('courses_training_centers_id_unique');
        });

        Schema::table('apprentices', function (Blueprint $table) {
            $table->dropUnique('apprentices_course_id_unique');
            $table->dropUnique('apprentices_computer_id_unique');
        });
    }

    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->unique('area_id');
            $table->unique('training_centers_id');
        });

        Schema::table('apprentices', function (Blueprint $table) {
            $table->unique('course_id');
            $table->unique('computer_id');
        });
    }
};
