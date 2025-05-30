<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class facultad extends Model
{
    protected $fillable = ['nombre', 'institucion_id'];

    public function institucion()
    {
        return $this->belongsTo(Institucion::class);
    }

    public function departamentos()
    {
        return $this->hasMany(Departamento::class);
    }

    public function estudiantes()
    {
        return $this->hasMany(Estudiante::class);
    }
}
