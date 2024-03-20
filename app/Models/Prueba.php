<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Prueba extends Model
{
    use HasFactory;

    public function resultados_pruebas() : HasMany
    {
        return $this->hasMany(Resultado_prueba::class);
    }

    public function categorias_ediciones() : BelongsTo
    {
        return $this->belongsTo(Categorias_edicion::class, 'categorias_ediciones_id');
    }

    public function patrocinadores() : BelongsTo
    {
        return $this->belongsTo(Patrocinador::class, 'patrocinadores_id');
    }
}
