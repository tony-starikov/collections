<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collections = Collection::all();

        return response()->json($collections, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'target_amount' => 'required|numeric',
            'link' => 'required|string',
        ]);

        $input = $request->all();

        $collection = Collection::create($input);

        return response()->json($collection, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $collection = Collection::find($id);

        if (is_null($collection)) {
            return response()->json(['error' => 'Collection not found'], 403);
        }

        return response()->json($collection, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'target_amount' => 'required|numeric',
            'link' => 'required|string',
        ]);

        $parameters = $request->all();

        $collection = Collection::find($id);

        if (is_null($collection)) {
            return response()->json(['error' => 'Collection not found'], 403);
        }

        $collection->update($parameters);

        return response()->json($collection, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
