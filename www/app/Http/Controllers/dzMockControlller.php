<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dzMockControlller extends Controller
{
    public $user=3;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'versoin'=>'v1',
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response()->json([
        'user_data' => $request->all()
    ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json([
            'versoin'=>'v1',
            'id'=>$id,
            'user'=>$this->user,
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return response()->json([
            'versoin'=>'v1',
            'id'=>$id,
            'user_data' => $request->all()
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return response()->json([
            'versoin'=>'v1',
            'id'=>$id,
        ]);
    }
}
