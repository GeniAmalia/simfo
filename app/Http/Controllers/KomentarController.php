<?php

namespace App\Http\Controllers;

use App\Models\Komentar;
use App\Http\Requests\StoreKomentarRequest;
use App\Http\Requests\UpdateKomentarRequest;

class KomentarController extends Controller
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
    public function store(StoreKomentarRequest $request)
    {
        $request->validate([
            'content' => 'required|max:500',
        ]);

        // Jika ada sistem pengguna, Anda bisa menyimpan user_id di sini
        // $user_id = auth()->user()->id;

        $comment = new Komentar();
        $comment->user_id = Auth()->user()->id;
        $comment->id_forum = $request->id_forum;
        $comment->content = $request->content;
        $comment->save();

        return redirect()->back()->with('success', 'Komentar berhasil ditambahkan.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Komentar $komentar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Komentar $komentar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKomentarRequest $request, Komentar $komentar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Komentar $komentar)
    {
        //
    }
}
