<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        $results= \App\Models\Post::all();
        $data = [
            "success" => true,
            "payload" => $results
        ];
        return response()->json($data);
    }
}
