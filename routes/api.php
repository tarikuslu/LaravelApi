<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NeighbourhoodController;
use App\Http\Controllers\HeadmanController;
use App\Http\Controllers\ManagerNoteController;
use App\Http\Controllers\PublicOpinionController;
use App\Http\Controllers\NeighbourhoodProjectController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get("/neighbourhood", [NeighbourhoodController::class, "index"]);

Route::get("/neighbourhood/{neighbourhood}/headman", [HeadmanController::class, "show"]);

Route::get("/neighbourhood/{neighbourhood}/manager", [ManagerNoteController::class, "index"]);

Route::get("/neighbourhood/{neighbourhood}/opinion", [PublicOpinionController::class, "index"]);

Route::get("/neighbourhood/{neighbourhood}/project", [NeighbourhoodProjectController::class, "index"]);

Route::get("/neighbourhood/{neighbourhood}", [NeighbourhoodController::class, "show"]);


Route::put("/neighbourhood/{neighbourhood}/headman", [HeadmanController::class, "update"]);

Route::put("/neighbourhood/{neighbourhood}", [NeighbourhoodController::class, "update"]);


Route::post("/neighbourhood/{neighbourhood}/manager", [ManagerNoteController::class, "store"]);

Route::put("/manager/{managerNote}", [ManagerNoteController::class, "update"]);

Route::delete("/manager/{managerNote}", [ManagerNoteController::class, "destroy"]);


Route::post("/neighbourhood/{neighbourhood}/opinion", [PublicOpinionController::class, "store"]);

Route::put("/opinion/{publicOpinion}", [PublicOpinionController::class, "update"]);

Route::delete("/opinion/{publicOpinion}", [PublicOpinionController::class, "destroy"]);


Route::post("/neighbourhood/{neighbourhood}/project", [NeighbourhoodProjectController::class, "store"]);

Route::put("/project/{project}", [NeighbourhoodProjectController::class, "update"]);

Route::delete("/project/{project}", [NeighbourhoodProjectController::class, "destroy"]);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
