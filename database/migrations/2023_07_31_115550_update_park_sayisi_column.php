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
        Schema::table('neighbourhoods', function (Blueprint $table) {
            $table->renameColumn("park_sayısı", "park_sayisi");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('neighbourhoods', function (Blueprint $table) {
            //
        });
    }
};
