<?php

namespace App\Http\Controllers;

use App\Http\Requests\CollectionStoreRequest;
use App\Http\Resources\CollectionResource;
use App\Models\Collection;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CollectionResource::collection(Collection::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CollectionStoreRequest $request)
    {
        $collection = Collection::create($request->validated());

        return new CollectionResource($collection);
    }

    /**
     * Display the specified resource.
     */
    public function show(Collection $collection)
    {
        return new CollectionResource($collection);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CollectionStoreRequest $request, Collection $collection)
    {
        $collection->update($request->validated());

        return new CollectionResource($collection);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Collection $collection)
    {
        $collection->delete();

        return response()->json(['success' => 'Collection deleted'], 200);
    }
}
