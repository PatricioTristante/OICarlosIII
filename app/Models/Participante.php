<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Participante extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'grupos_id',
    ];

    public function users() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function grupos() : BelongsTo
    {
        return $this->belongsTo(Grupo::class);
    }
}
