<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materiel extends Model
{
    use HasFactory;

    protected $table = 'ap_materiels';

    public function scopeSearch($query,$search): void
    {
        $query->where('Designation','like',"%{$search}%");
    }
}
