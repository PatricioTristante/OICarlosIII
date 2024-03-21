<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Grupo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'tutor',
        'centros_id',
        'categorias_id',
    ];

    public function users() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function participantes() : HasMany
    {
        return $this->hasMany(Participante::class);
    }

    public function centros() : BelongsTo
    {
        return $this->belongsTo(Centro::class);
    }

    public function categorias() : BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }

    public function resultados_pruebas() : HasMany
    {
        return $this->hasMany(Resultado_prueba::class);
    }
}
