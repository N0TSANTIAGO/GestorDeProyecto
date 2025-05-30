<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class evaluacion extends Model
{
    protected $fillable = ['descripcion'];

    public function proyectoEvaluaciones()
    {
        return $this->hasMany(Proyecto_Evaluacion::class);
    }
}
