<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

//  Model: It is for connection between database and laravel

class Employer extends Model
{
    /** @use HasFactory<\Database\Factories\EmployerFactory> */
    use HasFactory;

    public function jobs() {
        return $this->hasMany(Job::class);
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
