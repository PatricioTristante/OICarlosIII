<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Centro extends Model
{
    use HasFactory;

    protected $fillable = [
        'codcen',
        'dencen',
        'titularidad',
        'domcen',
        'cpcen',
        'loccen',
        'muncen',
        'telcen',
        'email',
    ];

    public function grupos() : HasMany
    {
        return $this->hasMany(Grupo::class);
    }
}
