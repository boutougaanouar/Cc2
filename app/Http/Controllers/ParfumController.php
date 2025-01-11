<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parfum;
use App\Models\Laboratoire;

class ParfumController extends Controller
{
    public function index()
    {
        $parfums = Parfum::with('laboratoire')->get();
        return view('parfum.index', compact('parfums'));
    }

    public function create()
    {
        $laboratoires = Laboratoire::orderBy('DesignationLabo')->get();
        return view('parfum.create', compact('laboratoires'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'NomPar' => 'required|string|max:255',
            'PrixVente' => 'required|numeric|min:0',
            'DateProduction' => 'required|date',
            'DateSortie' => 'required|date|after_or_equal:DateProduction',
            'NumLabo' => 'required|exists:laboratoires,NumLabo'
        ]);

        Parfum::create($validated);

        return redirect()->route('parfums.index')
            ->with('success', 'Le parfum a été créé avec succès.');
    }

    public function edit(Parfum $parfum)
    {
        $laboratoires = Laboratoire::orderBy('DesignationLabo')->get();
        return view('parfum.edit', compact('parfum', 'laboratoires'));
    }

    public function update(Request $request, Parfum $parfum)
    {
        $validated = $request->validate([
            'NomPar' => 'required|string|max:255',
            'PrixVente' => 'required|numeric|min:0',
            'DateProduction' => 'required|date',
            'DateSortie' => 'required|date|after_or_equal:DateProduction',
            'NumLabo' => 'required|exists:laboratoires,NumLabo'
        ]);

        $parfum->update($validated);

        return redirect()->route('parfums.index')
            ->with('success', 'Le parfum a été mis à jour avec succès.');
    }

    public function destroy(Parfum $parfum)
    {
        $parfum->delete();
        return redirect()->route('parfums.index')
            ->with('success', 'Le parfum a été supprimé avec succès.');
    }

    public function detailsProduits(Parfum $parfum)
    {
        $parfum->load('produits');
        return view('parfum.details-produits', compact('parfum'));
    }
}
