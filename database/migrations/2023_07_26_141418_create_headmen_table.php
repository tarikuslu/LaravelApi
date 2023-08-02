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
        Schema::create('headmen', function (Blueprint $table) {
            $table->id();
            $table->foreignId("neighbourhood_id")->constrained();
            $table->string("name");
            $table->string("cellphone");
            $table->string("home_number");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('headmen');
    }
};
