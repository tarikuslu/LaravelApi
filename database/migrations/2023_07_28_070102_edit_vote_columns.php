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

            $table->renameColumn("2023_yerel_iyi_vote_count", "yerel2019iyi_vote_count");
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
