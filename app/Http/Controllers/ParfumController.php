<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laboratoire;
use App\Models\Parfum;

class ParfumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $parfums = Parfum::with('laboratoire')->get(); 
        return view('parfum.index', compact('parfums'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $laboratoires = Laboratoire::all();
        return view('parfum.create', compact('laboratoires'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'NomPar' => 'required|string|max:255',
            'PrixVente' => 'required|numeric',
            'DateProduction' => 'required|date',
            'laboratoire_id' => 'required|exists:laboratoires,id',
        ]);

        Parfum::create($validated);
        return redirect()->route('parfum.index')->with('success', 'Parfum ajouté avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function detailsProduit($id)
    {
        $parfum = Parfum::findOrFail($id);
        return view('parfum.detailsProduit', compact('parfum'));
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
        $parfum = Parfum::findOrFail($id);
        $parfum->delete();
        return redirect()->route('parfum.index')->with('success', 'Parfum supprimé avec succès.');
    }
}
