<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class NewProductController extends Controller
{
    // public function index()
    // {
    //     $products = Product::all();
    //     return response()->json($products, 200, [], JSON_UNESCAPED_UNICODE);
    // }
    // public function show( int $id)
    // {
    //     $products = Product::find($id);
    //     if(!$products)
    //         return response()->json([
    //             'error'=>'Product not found'
    //         ]);
    //     return response()->json($products, 200, [], JSON_UNESCAPED_UNICODE);
    // }

    public function store(Request $request)
    {
        Product::create(
            [
                'name'=>$request->name,
                'price'=>$request->price,
                'category_id'=>$request->category_id
            ]
        );
        return response()->json('ок');
    }
}
