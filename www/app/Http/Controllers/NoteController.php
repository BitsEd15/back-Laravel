<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = Note::orderByDesc('priority')->get();
        return response()->json($notes, 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function store(Request $request)
    {
        Note::create($request->all());
        return response()->json('запись создана');
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        return response()->json($note, 200, [], JSON_UNESCAPED_UNICODE);
    }
}
