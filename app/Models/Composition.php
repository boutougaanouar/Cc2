<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Parfum;
use App\Models\Produit;


class Composition extends Model
{
    /** @use HasFactory<\Database\Factories\CompositionFactory> */
    use HasFactory;

    protected $fillable = ['parfum_id', 'produit_id', 'QuantiteUtilisee'];

    public function parfum()
    {
        return $this->belongsTo(Parfum::class, 'parfum_id');
    }

    public function produit()
    {
        return $this->belongsTo(Produit::class, 'produit_id');
    }
}
