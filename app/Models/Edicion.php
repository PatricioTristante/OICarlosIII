<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Edicion extends Model
{
    use HasFactory;

    protected $table = 'ediciones';

    protected $fillable = [
        'curso_escolar',
        'num_olicmpiada',
        'num_modding',
        'fecha_celebracion',
        'fecha_apertura',
        'fecha_cierre',
        'css_file',
    ];

    public function categorias_ediciones() : HasMany
    {
        return $this->hasMany(Categorias_edicion::class);
    }
}
