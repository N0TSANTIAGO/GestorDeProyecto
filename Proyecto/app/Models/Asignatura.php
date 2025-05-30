<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    protected $fillable = ['nombre', 'programa_id'];

    public function programa()
    {
        return $this->belongsTo(Programa::class);
    }

    public function estudiantes()
    {
        return $this->hasMany(Estudiante::class);
    }

    public function proyecto_Asignaturas()
    {
        return $this->hasMany(Proyecto_Asignatura::class);
    }
}
