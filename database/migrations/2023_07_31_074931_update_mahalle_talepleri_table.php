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
        Schema::rename("mahalle_talepleri", "public_opinions");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mahalle_talepleri', function (Blueprint $table) {
            //
        });
    }
};
