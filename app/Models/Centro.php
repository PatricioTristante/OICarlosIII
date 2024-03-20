<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Centro extends Model
{
    use HasFactory;

    public function grupos() : HasMany
    {
        return $this->hasMany(Grupo::class);
    }
}
