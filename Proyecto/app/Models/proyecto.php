<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class proyecto extends Model
{
    protected $fillable = ['titulo', 'descripcion', 'tipo_proyecto_id'];

    public function tipo()
    {
        return $this->belongsTo(TipoProyecto::class, 'tipo_proyecto_id');
    }

    public function proyectoAsignaturas()
    {
        return $this->hasMany(Proyecto_Asignatura::class);
    }

    public function proyectoEvaluaciones()
    {
        return $this->hasMany(Proyecto_Evaluacion::class);
    }
}
