<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Laboratoire;
use App\Models\Composition;
use App\Models\Produit;

class Parfum extends Model
{
    /** @use HasFactory<\Database\Factories\ParfumFactory> */
    use HasFactory;

    protected $fillable = ['NomPar', 'PrixVente', 'DateProduction', 'DateSortie', 'laboratoire_id'];

    // Relation avec le laboratoire : un parfum appartient à un laboratoire
    public function laboratoire()
    {
        return $this->belongsTo(Laboratoire::class);
    }

    // Relation avec les compositions : un parfum peut avoir plusieurs compositions
    public function compositions()
    {
        return $this->hasMany(Composition::class);
    }

    // Relation avec les produits via la table pivot `compositions`
    public function produits()
    {
        return $this->belongsToMany(Produit::class, 'compositions')
                    ->withPivot('QuantiteUtilisee')
                    ->withTimestamps();
    }
}
