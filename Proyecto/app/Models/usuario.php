<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    protected $fillable = ['nombre', 'email', 'password', 'institucion_id'];

    public function institucion()
    {
        return $this->belongsTo(Institucion::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Rol::class, 'usuario_role');
    }
}
