<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContributorStoreRequest;
use App\Http\Requests\ContributorUpdateRequest;
use App\Http\Resources\ContributorResource;
use App\Models\Contributor;

class ContributorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ContributorResource::collection(Contributor::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContributorStoreRequest $request)
    {
        $contributor = Contributor::create($request->validated());

        return new ContributorResource($contributor);
    }

    /**
     * Display the specified resource.
     */
    public function show(Contributor $contributor)
    {
        return new ContributorResource($contributor);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContributorUpdateRequest $request, Contributor $contributor)
    {
        $contributor->update($request->validated());

        return new ContributorResource($contributor);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contributor $contributor)
    {
        $contributor->delete();

        return response()->json(['success' => 'Contributor deleted'], 200);
    }
}
