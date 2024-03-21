<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'ciclo_id',
        'nombre',
        'apellidos',
    ];


    public function ciclos() : BelongsTo
    {
        return $this->belongsTo(Ciclo::class);
    }

    public function participantes() : HasMany
    {
        return $this->hasMany(Participante::class);
    }

    public function grupos() : HasMany
    {
        return $this->hasMany(Grupo::class);
    }
}
