<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Patrocinador extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'logotipo',
    ];

    protected $table = 'patrocinadores';

    public function pruebas() : HasMany
    {
        return $this->hasMany(Prueba::class, 'patrocinadores_id');
    }
}
