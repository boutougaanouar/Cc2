<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Composition;
use App\Models\Parfum;

class Produit extends Model
{
    /** @use HasFactory<\Database\Factories\ProduitFactory> */
    use HasFactory;

    protected $fillable = ['DesignationPro', 'UniteMesurePro', 'QteStock'];

    // Relation avec les compositions : un produit peut apparaître dans plusieurs compositions
    public function compositions()
    {
        return $this->hasMany(Composition::class);
    }

    // Relation avec les parfums via la table pivot `compositions`
    public function parfums()
    {
        return $this->belongsToMany(Parfum::class, 'compositions')
                    ->withPivot('QuantiteUtilisee')
                    ->withTimestamps();
    }
}
