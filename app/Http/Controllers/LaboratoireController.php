<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laboratoire;

class LaboratoireController extends Controller
{
    public function index(Request $request)
    {
        $query = Laboratoire::withCount('parfums');
        
        if ($request->has('ville')) {
            $query->where('ville', 'like', '%' . $request->ville . '%');
        }
        
        $laboratoires = $query->get();
        return view('laboratoire.index', compact('laboratoires'));
    }

    public function create()
    {
        return view('laboratoire.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'DesignationLabo' => 'required|string|max:255',
            'ville' => 'required|string|max:255'
        ]);

        Laboratoire::create($validated);
        return redirect()->route('laboratoires.index')->with('success', 'Laboratoire créé avec succès.');
    }

    public function edit(Laboratoire $laboratoire)
    {
        return view('laboratoire.edit', compact('laboratoire'));
    }

    public function update(Request $request, Laboratoire $laboratoire)
    {
        $validated = $request->validate([
            'DesignationLabo' => 'required|string|max:255',
            'ville' => 'required|string|max:255'
        ]);

        $laboratoire->update($validated);
        return redirect()->route('laboratoires.index')->with('success', 'Laboratoire mis à jour avec succès.');
    }

    public function destroy(Laboratoire $laboratoire)
    {
        $laboratoire->delete();
        return redirect()->route('laboratoires.index')->with('success', 'Laboratoire supprimé avec succès.');
    }
}
