<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Parfum;

class Produit extends Model
{
    use HasFactory;

    protected $primaryKey = 'CodPro';
    
    protected $fillable = [
        'DesignationPro',
        'UniteMesurePro',
        'QteStock'
    ];

    public function parfums()
    {
        return $this->belongsToMany(Parfum::class, 'compositions', 'CodPro', 'CodPar')
            ->withPivot('QuantiteUtilisee');
    }
}
