<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Parfum;
use App\Models\Produit;

class Composition extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $primaryKey = ['CodPar', 'CodPro'];
    
    protected $fillable = [
        'CodPar',
        'CodPro',
        'QuantiteUtilisee'
    ];

    public function parfum()
    {
        return $this->belongsTo(Parfum::class, 'CodPar');
    }

    public function produit()
    {
        return $this->belongsTo(Produit::class, 'CodPro');
    }
}
