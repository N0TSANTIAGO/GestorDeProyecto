<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class institucion extends Model
{
    protected $fillable = ['nombre', 'direccion'];

    public function facultades()
    {
        return $this->hasMany(Facultad::class);
    }

    public function estudiantes()
    {
        return $this->hasMany(Estudiante::class);
    }

    public function usuarios()
    {
        return $this->hasMany(Usuario::class);
    }
}
