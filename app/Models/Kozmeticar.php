<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kozmeticar extends Model
{
    use HasFactory;
    protected $fillable = [
        'ime',
        'prezime',
        'godRođenja',
        'broj_Telefona',
        'salon_id'
    ];
     public function salon()
    {
        return $this->belongsTo(Salon::class);
    }

    public function musterije()
    {
        return $this->hasMany(Musterija::class);
    }
}
