<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Resultado_prueba extends Model
{
    use HasFactory;

    protected $fillable = [
        'grupos_id',
        'pruebas_id',
        'puntos',
        'tiempo',
        'penalizacion',
    ];

    protected $table = 'resultados_pruebas';

    public function grupos() : BelongsTo
    {
        return $this->belongsTo(Grupo::class);
    }

    public function pruebas() : BelongsTo
    {
        return $this->belongsTo(Prueba::class);
    }
}
