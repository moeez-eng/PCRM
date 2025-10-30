<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lease extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'property_type',
        'plot_number',
        'block',
        'location',
        'city',
        'price',
        'category',
        'paid_status',
        'c_type',
        'contact_number',
        'client_name',
        'property_id',
        'user_id',
        'period',
        'rent',
    ];

    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
