<?php

namespace App\Http\Controllers;

use App\Models\Headman;
use App\Models\Neighbourhood;
use Illuminate\Http\Request;

class HeadmanController extends Controller
{
    public function show(Neighbourhood $neighbourhood) {
        return Headman::where("neighbourhood_id" , "=", $neighbourhood->id )->first();
    }

    public function update(Request $request, Neighbourhood $neighbourhood) {

        $selected_headman = Headman::where("neighbourhood_id" , "=", $neighbourhood->id )->first();

        $validated_request = $request->validate([
            "muhtar_adsoyad" => "required",
            "muhtar_cep" => "required",
            "muhtar_evtel" => "required"
        ]);

        $selected_headman->update($validated_request);
        return $selected_headman;
    }
}
