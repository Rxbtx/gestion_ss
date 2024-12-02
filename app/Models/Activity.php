<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'actividad', 
        'descripcion', 
        'fecha_creacion', 
        'fecha_ultima_actualizacion', 
        'estatus'
    ];

    protected $dates = ['fecha_creacion', 'fecha_ultima_actualizacion'];
}
