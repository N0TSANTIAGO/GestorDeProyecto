<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class departamento extends Model
{
    protected $fillable = ['nombre', 'facultad_id'];

    public function facultad()
    {
        return $this->belongsTo(Facultad::class);
    }

    public function programas()
    {
        return $this->hasMany(programa::class);
    }

    public function estudiantes()
    {
        return $this->hasMany(Estudiante::class);
    }
}
