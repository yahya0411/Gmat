<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commercant extends Model
{
    use HasFactory;
    protected $table = 'ap_clients';

    public function scopeSearch($query,$search): void
    {
        $query->where('Denomination','like',"%{$search}%")->orWhere('Activite','like',"%{$search}%")->orWhere('Telephone','like',"%{$search}%");
    }
}
