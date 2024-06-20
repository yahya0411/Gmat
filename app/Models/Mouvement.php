<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mouvement extends Model
{
    use HasFactory;

    protected $table = 'ap_mouvements';

   /* public function scopeSearch($query,$search): void
    {
        $query->where('Designation','like',"%{$search}%");
    }*/
}
