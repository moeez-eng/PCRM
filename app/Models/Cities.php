<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Property;

class Cities extends Model
{
    protected $table = 'cities';

    protected $fillable = [
        'name',
    ];

    public function properties(): HasMany
    {
        return $this->hasMany(Property::class, 'city', 'name');
    }
}
