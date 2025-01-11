<?php

namespace App\Http\Controllers;

use App\Models\Laboratoire;
use App\Models\Parfum;
use App\Models\Produit;
use App\Models\Composition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // Statistiques de base
        $totalParfums = Parfum::count();
        $totalLaboratoires = Laboratoire::count();
        $totalProduits = Produit::count();

        // Nombre de parfums par laboratoire
        $parfumsParLabo = Laboratoire::select('DesignationLabo as laboratoire')
            ->withCount('parfums as count')
            ->orderBy('count', 'desc')
            ->get();

        // Produits les plus utilisés dans les compositions
        $produitsUtilises = DB::table('compositions')
            ->join('produits', 'compositions.CodPro', '=', 'produits.CodPro')
            ->select('produits.DesignationPro as produit', DB::raw('COUNT(*) as utilisations'))
            ->groupBy('produits.CodPro', 'produits.DesignationPro')
            ->orderBy('utilisations', 'desc')
            ->limit(5)
            ->get();

        return view('dashboard', compact(
            'totalParfums',
            'totalLaboratoires',
            'totalProduits',
            'parfumsParLabo',
            'produitsUtilises'
        ));
    }
}
