<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laboratoire;

class LaboratoireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Vérifier si une recherche par ville est effectuée
        $search = $request->input('search', ''); // Recherche par défaut vide

        // Récupérer les laboratoires avec le nombre de parfums associés
        $laboratoires = Laboratoire::withCount('parfums') // Récupérer le nombre de parfums
            ->when($search, function ($query, $search) {
                return $query->where('ville', 'like', "%{$search}%"); // Rechercher par ville
            })
            ->get();

        // Retourner la vue avec les laboratoires
        return view('laboratoire.index', compact('laboratoires', 'search'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
