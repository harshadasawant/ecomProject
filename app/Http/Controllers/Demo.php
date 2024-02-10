<?php

namespace App\Http\Controllers;
use App\Models\post;


use Illuminate\Http\Request;

class Demo extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response() -> json(['posts'=>post::get()]);
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = new post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return response()->json([
            'message'=>'post created',
            'status' => 'success',
            'data' => $post

        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
