<?php

namespace App\Http\Controllers;

use App\Http\Requests\CollectionSearchRequest;
use App\Http\Resources\CollectionResource;
use App\Models\Collection;

class SearchController extends Controller
{
    /**
     * Search the specified resource.
     */
    public function search(CollectionSearchRequest $request)
    {
        return CollectionResource::collection(Collection::where('target_amount', '<', $request->search_amount)->get());
    }

    /**
     * Search the specified resource.
     */
    public function filterFromLess()
    {
        return CollectionResource::collection(Collection::orderBy('target_amount', 'asc')->get());
    }

    /**
     * Search the specified resource.
     */
    public function filterFromMore()
    {
        return CollectionResource::collection(Collection::orderBy('target_amount', 'desc')->get());
    }
}
