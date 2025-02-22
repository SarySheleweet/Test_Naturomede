<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Patho extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function symptoms(): BelongsToMany
    {
        return $this->belongsToMany(Symptom::class, 'patho_symptoms');
    }

    public function systems(): BelongsToMany
    {
        return $this->belongsToMany(System::class, 'patho_systems');
    }

    public function problems(): MorphToMany
    {
        return $this->morphToMany(Client::class, 'problems');
    }

    public function herbals()
    {
        return $this->morphedByMany(Herbal::class, 'treatable', 'tretables');
    }

    public function nutris()
    {
        return $this->morphedByMany(Nutri::class, 'treatable', 'tretables');
    }

    public function measures()
    {
        return $this->morphedByMany(Measure::class, 'treatable', 'tretables');
    }

    public function aromas()
    {
        return $this->morphedByMany(Aroma::class, 'treatable', 'tretables');
    }
}

