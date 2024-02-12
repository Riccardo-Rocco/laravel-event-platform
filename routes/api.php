<?php

use Illuminate\Http\Request;
use App\Models\User;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/prova", function (){
    $dati = User::all();
    return response()->json($dati);
});

