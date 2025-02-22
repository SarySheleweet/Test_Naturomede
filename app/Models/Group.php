<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Group extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['name'];

    public function families(): HasMany
    {
        return $this->hasMany(Family::class);
    }
}
