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
        Schema::create('neighbourhood_projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId("neighbourhood_id")->constrained();
            $table->string("name");
            $table->string("project_type");
            $table->string("built_year");
            $table->double("cost", 10,4);
            $table->double("target_m2", 10,3);
            $table->double("actual_m2", 10,3);
            $table->double("completion_percentage", 4,2);
            $table->text("project_detail")->nullable();
            $table->string("project_status");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('neighbourhood_projects');
    }
};
