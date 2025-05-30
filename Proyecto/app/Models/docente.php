<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class docente extends Model
{
    protected $fillable = ['nombre', 'correo'];

    public function proyecto_Asignaturas()
    {
        return $this->hasMany(Proyecto_Asignatura::class);
    }
}
