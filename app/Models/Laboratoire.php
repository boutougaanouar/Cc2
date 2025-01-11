<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Parfum;

class Laboratoire extends Model
{
    use HasFactory;

    protected $primaryKey = 'NumLabo';
    
    protected $fillable = [
        'DesignationLabo',
        'ville'
    ];

    public function parfums()
    {
        return $this->hasMany(Parfum::class, 'NumLabo');
    }
}
