<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Institucion extends Model
{
    use HasFactory;

    // Forzar nombre de tabla
    protected $table = 'institucion';

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
