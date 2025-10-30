<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MaintenanceRequest extends Model
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
        'description',
        'status',
    ];

    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class);
    }
}
