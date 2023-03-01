<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sparePart extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'cantidad',
        'descripcion',
        'estado',
        'codigo',
    ];
}
