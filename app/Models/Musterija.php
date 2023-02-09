<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musterija extends Model
{
    use HasFactory;
    public function kozmeticar()
    {
        return $this->belongsTo(Kozmeticar::class);
    }
}
