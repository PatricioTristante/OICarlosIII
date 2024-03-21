<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'grado_id',
    ];

    public function grupos() : HasMany
    {
        return $this->hasMany(Grupo::class);
    }

    public function grados() : BelongsTo
    {
        return $this->belongsTo(Grado::class);
    }

    public function categorias_ediciones() : HasMany
    {
        return $this->hasMany(Categorias_edicion::class);
    }
}
