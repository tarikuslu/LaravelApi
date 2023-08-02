<?php

namespace App\Http\Controllers;

use App\Models\Neighbourhood;
use App\Models\NeighbourhoodProject;
use Illuminate\Http\Request;

class NeighbourhoodProjectController extends Controller
{
    public function index(Neighbourhood $neighbourhood) {
       return NeighbourhoodProject::where("neighbourhood_id", "=", $neighbourhood->id)->get();
    }

    public function store(Request $request, Neighbourhood $neighbourhood, NeighbourhoodProject $project) {
        $validated_request = $request->validate([
            "proje_adi" => "required",
            "proje_tipi" => "required",
            "yapim_yili" => "required",
            "masraf" => "required",
            "hedef_m2" => "required",
            "gercek_m2" => "required",
            "tamamlanma_yuzdesi" => "required",
            "proje_detayi" => "required",
            "proje_durumu" => "required",
        ]);

        $created_project = new NeighbourhoodProject();
        $created_project["proje_adi"] = $request->proje_adi;
        $created_project["proje_tipi"] = $request->proje_tipi;
        $created_project["yapim_yili"] = $request->yapim_yili;
        $created_project["masraf"] = $request->masraf;
        $created_project["hedef_m2"] = $request->hedef_m2;
        $created_project["gercek_m2"] = $request->gercek_m2;
        $created_project["tamamlanma_yuzdesi"] = $request->tamamlanma_yuzdesi;
        $created_project["proje_detayi"] = $request->proje_detayi;
        $created_project["proje_durumu"] = $request->proje_durumu;
        $created_project["neighbourhood_id"] = $neighbourhood->id;

        $created_project->save();

        return NeighbourhoodProject::where("neighbourhood_id", "=", $neighbourhood->id)->get();
    }

    public function update(Request $request, NeighbourhoodProject $project) {
        $validated = $request->validate([
            "proje_adi" => "required",
            "proje_tipi" => "required",
            "yapim_yili" => "required",
            "masraf" => "required",
            "hedef_m2" => "required",
            "gercek_m2" => "required",
            "tamamlanma_yuzdesi" => "required",
            "proje_detayi" => "required",
            "proje_durumu" => "required",
            "neighbourhood_id" => "required"
        ]);

        $project->update($validated);

        return $project;
    }

    public function destroy(Request $request, NeighbourhoodProject $project) {
        $id = $project->id;
        $project->delete();
        return $id;
    }
}
