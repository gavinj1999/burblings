<?php

namespace App\Http\Controllers;

use App\Models\Politician;
use App\Http\Requests\StorePoliticianRequest;
use App\Http\Requests\UpdatePoliticianRequest;

class PoliticianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePoliticianRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Politician $politician)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Politician $politician)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePoliticianRequest $request, Politician $politician)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Politician $politician)
    {
        //
    }
}
