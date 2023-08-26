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
}
