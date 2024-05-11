<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bp extends Model
{
    use HasFactory;
    protected $table = 'ap_etablissements';


    public function scopeSearch($query,$search): void
    {
        $query->where('Denomination','like',"%{$search}%")->orWhere('Ccp','like',"%{$search}%");
    }
}
