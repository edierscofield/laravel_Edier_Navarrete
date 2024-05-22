<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoInformatica extends Model
{
    use HasFactory;

    protected $table = 'cursoinformatica'; // Nombre de la tabla en la base de datos

    protected $fillable = ['nombre', 'descripcion', 'duracion', 'nivel', 'imagen'];
}

