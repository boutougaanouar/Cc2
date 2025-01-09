<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Parfum;

class Laboratoire extends Model
{
    /** @use HasFactory<\Database\Factories\LaboratoireFactory> */
    use HasFactory;

    protected $fillable = ['DesignationLabo', 'ville'];

    // Relation avec les parfums : un laboratoire peut avoir plusieurs parfums
    public function parfums()
    {
        return $this->hasMany(Parfum::class, 'laboratoire_id');
    }
}
