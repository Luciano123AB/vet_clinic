<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Procedure extends Model
{
    public function consultations(): BelongsToMany
    {
        return $this->belongsToMany(Consultation::class, 'consultations_procedures', 'procedure_id', 'consultation_id');
    }
}
