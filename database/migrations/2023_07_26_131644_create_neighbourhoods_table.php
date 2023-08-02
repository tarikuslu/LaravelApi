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
        Schema::create('neighbourhoods', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("distance_to_district");
            $table->double("area",8,3);
            $table->boolean("reconstruction");
            $table->integer("house_count");
            $table->integer("business_count");
            $table->integer("woman_count");
            $table->integer("man_count");
            $table->integer("garbage_container_count");
            $table->integer("school_count");
            $table->integer("student_count");
            $table->integer("mosque_count");
            $table->boolean("cottage_hospital");
            $table->integer("park_count");
            $table->boolean("village_mansion");
            $table->integer("greencard_owner_count");
            $table->integer("municipality_aid_count");
            $table->integer("2023_neighbourhood_mv_akp_vote_count");
            $table->integer("2023_neighbourhood_mv_mhp_vote_count");
            $table->integer("2023_neighbourhood_mv_iyi_vote_count");
            $table->integer("2023_neighbourhood_mv_chp_vote_count");
            $table->integer("2023_neighbourhood_mv_hdp_vote_count");
            $table->integer("2023_cumhur_vote_count");
            $table->integer("2023_millet_vote_count");
            $table->integer("2019_yerel_mhp_vote_count");
            $table->integer("2023_yerel_iyi_vote_count");
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('neighbourhoods');
    }
};
