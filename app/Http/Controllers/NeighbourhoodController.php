<?php

namespace App\Http\Controllers;

use App\Models\Neighbourhood;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NeighbourhoodController extends Controller
{
    public function index() {
        return Neighbourhood::all();
    }

    public function show(Neighbourhood $neighbourhood) {
        return $neighbourhood;
    }

    public function update(Request $request, Neighbourhood $neighbourhood) {
        $validated_request = $request->validate([
            "mahalle_adi" => 'required|string|min:2|max:50',
            "ilceye_uzaklik" => 'required|string|max:50',
            "yuzolcumu" => 'required',
            "imar_durumu" => 'required',
            "hane_sayisi"=> 'required',
            "esnaf_sayisi" => 'required',
            "kadin_sayisi" => 'required',
            "erkek_sayisi" => 'required',
            "cop_kutusu_sayisi" => 'required',
            "okul_sayisi" => 'required',
            "ogrenci_sayisi" => 'required',
            "cami_sayisi" => 'required',
            "saglik_ocagi" => 'required',
            "park_sayisi" => 'required',
            "koy_konagi" => 'required',
            "yesilkartli_sayisi" => 'required',
            "belediye_yardimi_alan_sayisi" => 'required',
            "akp2023mv_oysayisi" => 'required',
            "mhp2023mv_oysayisi" => 'required',
            "iyi2023mv_oysayisi" => 'required',
            "chp2023mv_oysayisi" => 'required',
            "hdp2023mv_oysayisi" => 'required',
            "cumhur2023oy_sayisi" => 'required',
            "millet2023oy_sayisi" => 'required',
            "yerel2019mhp_oy_sayisi" => 'required',
            "yerel2019iyi_oy_sayisi" => 'required',
            "nufus" => "required"
        ]);

        $neighbourhood->update($validated_request);

        return $neighbourhood;
    }
}
