<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arrivage extends Model
{
    use HasFactory;

    protected $table = 'ap_arrivages';

    public function scopeSearch($query,$search): void
    {
        $query->where('Expediteur','like',"%{$search}%");
    }
}
