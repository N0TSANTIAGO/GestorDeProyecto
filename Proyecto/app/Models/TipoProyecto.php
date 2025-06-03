<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoProyecto extends Model {
    use HasFactory;

    protected $table = 'tipo_proyecto';

    // Cambié el fillable para que solo incluya 'nombre'
    protected $fillable = ['nombre'];

    public function proyectos()
    {
        return $this->hasMany(Proyecto::class);
    }
}
