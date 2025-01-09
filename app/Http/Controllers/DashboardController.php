<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laboratoire;
use App\Models\Parfum;
use App\Models\Produit;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Récupérer les données nécessaires pour le tableau de bord
        $totalLaboratoires = Laboratoire::count();
        $totalParfums = Parfum::count();
        $lastParfum = Parfum::latest()->first(); // Dernier parfum créé
        $productWithMaxStock = Produit::orderByDesc('QteStock')->first(); // Produit avec le plus grand stock

        // Retourner la vue avec les données
        return view('dashboard.DashBoardParfumerie', compact(
            'totalLaboratoires',
            'totalParfums',
            'lastParfum',
            'productWithMaxStock'
        ));
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
