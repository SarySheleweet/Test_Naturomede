<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Property extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['name'];

    public function families(): BelongsToMany
    {
        return $this->belongsToMany(Family::class, 'family_properties');
    }
}
