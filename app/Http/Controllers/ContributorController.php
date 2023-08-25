<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContributorStoreRequest;
use App\Http\Resources\ContributorResource;
use App\Models\Contributor;
use Illuminate\Http\Request;

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
