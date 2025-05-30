<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class estudiante extends Model
{
    protected $fillable = [
        'nombre', 'correo', 'institucion_id',
        'facultad_id', 'departamento_id', 'asignatura_id'
    ];

    public function institucion()
    {
        return $this->belongsTo(Institucion::class);
    }

    public function facultad()
    {
        return $this->belongsTo(Facultad::class);
    }

    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }

    public function asignatura()
    {
        return $this->belongsTo(Asignatura::class);
    }
}
