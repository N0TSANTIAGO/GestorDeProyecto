<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class programa extends Model
{
    protected $fillable = ['nombre', 'departamento_id'];

    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }

    public function asignaturas()
    {
        return $this->hasMany(Asignatura::class);
    }
}
