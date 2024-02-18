<?php

namespace App\Http\Controllers;

use App\Http\Requests\LivreStoreRequest;
use App\Models\Livre;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LivreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('formulaire');
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
    public function store(LivreStoreRequest $request)
    {
        $livre = new Livre();
        $livre->titre = $request->titre;
        $livre->description = $request->description;
        $livre->prixAchat = $request->prixAchat;
        $livre->prixVente = $request->prixVente;
        $livre->quantite = $request->quantite;
        $livre->auteur = $request->auteur;
        //$livre->couverture = $request->couverture;
        $livre->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Livre $livre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Livre $livre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Livre $livre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Livre $livre)
    {
        //
    }
}
