<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return [[
            'id'=>1,
            'product'=>"milk"
        ],
        [
            'id'=>2,
            'product'=>"bread"
        ],
        [
            'id'=>3,
            'product'=>"chocolate"
        ],
        ];
    }

    public function show(int $id)
    {
        return "Товар с ID: " . $id;
    }
}
