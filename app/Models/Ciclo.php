<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ciclo extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'nombre',
        'grado_id',
    ];

    public function grados() : BelongsTo
    {
        return $this->belongsTo(Grado::class);
    }

    public function users() : HasMany
    {
        return $this->hasMany(User::class);
    }
}
