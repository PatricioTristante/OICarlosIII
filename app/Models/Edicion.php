<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Edicion extends Model
{
    use HasFactory;

    protected $table = 'ediciones';

    public function categorias_ediciones() : HasMany
    {
        return $this->hasMany(Categorias_edicion::class);
    }
}
