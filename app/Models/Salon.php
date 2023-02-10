<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{
    use HasFactory;
    protected $fillable = [
        'naziv',
        'vlasnik',
        'adresa',
        'grad',
        'website'
    ];
    public function kozmeticar()
    {
        return $this->hasMany(Kozmeticar::class);
    }
}
