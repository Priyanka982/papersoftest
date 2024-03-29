<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\APIBaseController;
use Illuminate\Http\Request;


class PostController extends APIBaseController
{
    public function index()
    {
        
        auth()->user()->posts;
        $data = [
            'user' => auth()->user()
        ];
 
        return response()->json([
            'success' => true,
            'data' => $data
        ]);
        
    }
}
