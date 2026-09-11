<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function sayHello()
    {
        echo '<pre>' . htmlentities(print_r('Привет', true)) . '</pre>';
    }
    public function sayHi()
    {
        return view('welcome');
    }
    public function create()
    {
       return response()->json([
        'succes'=> true,
        'action'=> 'create',
       ]);
    }

    public function read()
    {
       return response()->json([
        'succes'=> true,
        'action'=> 'read',
       ]);
    }

    public function readByID(int $id, string $name)
    {
       return response()->json([
        'succes'=> true,
        'action'=> 'readByID',
		'id'=> $id, 
		'nae'=> $name,
       ]);
    }

     public function update()
    {
       return response()->json([
        'succes'=> true,
        'action'=> 'update',
       ]);
    }

    public function delete()
    {
       return response()->json([
        'succes'=> true,
        'action'=> 'delete',
       ]);
    }
}
