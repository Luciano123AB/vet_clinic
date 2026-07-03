<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vet extends Model
{
    public function consultation(): HasMany
    {
        return $this->hasMany(Consultation::class);
    }
}
