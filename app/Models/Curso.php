<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'descripcion', 'descripcion_larga']; // Lista de propiedades que pueden ser asignadas en masa

    // Resto de tu lógica del modelo aquí
}
