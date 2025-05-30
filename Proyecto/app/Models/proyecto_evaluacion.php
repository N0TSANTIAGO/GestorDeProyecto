<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class proyecto_evaluacion extends Model
{
    protected $fillable = ['proyecto_id', 'evaluacion_id', 'evaluador_id', 'resultado'];

    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class);
    }

    public function evaluacion()
    {
        return $this->belongsTo(Evaluacion::class);
    }

    public function evaluador()
    {
        return $this->belongsTo(Evaluador::class);
    }
}
