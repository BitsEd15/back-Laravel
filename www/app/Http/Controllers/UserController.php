<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(int $id)
    {
        $jsonArr =array('user_id'=>$id,'role'=>"developer");
        return response()->json($jsonArr);
    }
}