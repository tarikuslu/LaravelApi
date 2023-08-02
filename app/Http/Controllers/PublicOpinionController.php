<?php

namespace App\Http\Controllers;

use App\Models\Neighbourhood;
use App\Models\PublicOpinion;
use Illuminate\Http\Request;

class PublicOpinionController extends Controller
{
    public function index(Neighbourhood $neighbourhood) {
        return PublicOpinion::where("neighbourhood_id", "=", $neighbourhood->id)->get();
    }

    public function store(Request $request, Neighbourhood $neighbourhood) {
        $validated_request = $request->validate([
            "talep" => "required",
        ]);

        $created_opinion = new PublicOpinion();
        $created_opinion["talep"] = $request->talep;
        $created_opinion["neighbourhood_id"] = $neighbourhood->id;

        $created_opinion->save();

        return PublicOpinion::where("neighbourhood_id", "=", $neighbourhood->id)->get();
    }

    public function update(Request $request, PublicOpinion $publicOpinion) {
        $validated = $request->validate([
            "talep" => "required",
            "neighbourhood_id" => "required"
        ]);

        $publicOpinion->update($validated);

        return $publicOpinion;
    }

    public function destroy(Request $request, PublicOpinion $publicOpinion) {
        $id = $publicOpinion->id;
        $publicOpinion->delete();
        return $id;
    }
}
