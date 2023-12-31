<?php

namespace App\Http\Controllers;

use App\Models\Organisasi;
use App\Http\Requests\StoreOrganisasiRequest;
use App\Http\Requests\UpdateOrganisasiRequest;

class OrganisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Organisasi::all();
        return view('/organisasi/organisasi', compact('data'));
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        $data = Organisasi::all();
        return view('organisasi/input-organisasi', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrganisasiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Organisasi $organisasi)
    {
        $data = Organisasi::all();
        return view('/organisasi/detail-organisasi');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Organisasi $organisasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrganisasiRequest $request, Organisasi $organisasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Organisasi $organisasi)
    {
        //
    }
}
