<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoProyecto extends Model {
    use HasFactory;

    protected $table = 'tipo_proyecto';

    protected $fillable = ['codigo','tipo','descripcion'];

    public function proyectos()
    {
        return $this->hasMany(Proyecto::class);
    }
}
