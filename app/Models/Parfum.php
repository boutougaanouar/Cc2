<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Laboratoire;
use App\Models\Produit;

class Parfum extends Model
{
    use HasFactory;

    protected $primaryKey = 'CodPar';
    
    protected $fillable = [
        'NomPar',
        'PrixVente',
        'DateProduction',
        'DateSortie',
        'NumLabo'
    ];

    protected $casts = [
        'DateProduction' => 'date',
        'DateSortie' => 'date'
    ];

    public function laboratoire()
    {
        return $this->belongsTo(Laboratoire::class, 'NumLabo');
    }

    public function produits()
    {
        return $this->belongsToMany(Produit::class, 'compositions', 'CodPar', 'CodPro')
            ->withPivot('QuantiteUtilisee');
    }
}
