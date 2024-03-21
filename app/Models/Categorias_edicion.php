<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categorias_edicion extends Model
{
    use HasFactory;

    protected $table = 'categorias_ediciones';

    protected $fillable = [
        'categorias_id',
        'edicion_id',
    ];

    public function pruebas() : HasMany
    {
        return $this->hasMany(Prueba::class, 'categorias_ediciones_id');
    }

    public function categorias() : BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }

    public function ediciones() : BelongsTo
    {
        return $this->belongsTo(Edicion::class);
    }
}
