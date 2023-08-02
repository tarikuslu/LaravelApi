<?php

namespace App\Http\Controllers;

use App\Models\ManagerNote;
use App\Models\Neighbourhood;
use Illuminate\Http\Request;

class ManagerNoteController extends Controller
{
    public function index(Neighbourhood $neighbourhood) {

        return ManagerNote::where("neighbourhood_id", "=", $neighbourhood->id)->get();
    }

    public function store(Request $request, Neighbourhood $neighbourhood) {
        $validated_request = $request->validate([
            "not" => "required"
        ]);

        $created_note = new ManagerNote();
        $created_note["not"] = $request->not;
        $created_note["neighbourhood_id"] = $neighbourhood->id;
        $created_note->save();

        return ManagerNote::where("neighbourhood_id", "=", $neighbourhood->id)->get();
    }

    public function update(Request $request, Neighbourhood $neighbourhood, ManagerNote $managerNote) {
        $validated = $request->validate([
            "not" => "required",
            "neighbourhood_id" => "required"
        ]);
        $managerNote->update($validated);
        return $managerNote;
    }

    public function destroy(Request $request, ManagerNote $managerNote) {
        $id = $managerNote->id;
        $managerNote->delete();
        return  $id;
    }
}
