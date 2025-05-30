<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class permiso extends Model
{
    protected $fillable = ['nombre'];

    public function roles()
    {
        return $this->belongsToMany(Rol::class, 'rol_permiso');
    }
}
