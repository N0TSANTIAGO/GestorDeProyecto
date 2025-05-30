<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class rol extends Model
{
    protected $fillable = ['nombre'];

    public function usuarios()
    {
        return $this->belongsToMany(Usuario::class, 'usuario_role');
    }

    public function permisos()
    {
        return $this->belongsToMany(Permiso::class, 'rol_permiso');
    }
}
