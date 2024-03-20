<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Grado extends Model
{
    use HasFactory;

    public function ciclos() : HasMany
    {
        return $this->hasMany(Ciclo::class);
    }

    public function categorias() : HasMany
    {
        return $this->hasMany(Categoria::class);
    }
}
