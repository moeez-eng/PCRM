<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Property extends Model
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
        'status',
    ];

    public function setCityAttribute($value): void
    {
        $this->attributes['city'] = ucwords(strtolower(trim((string) $value)));
    }

    public function leases(): HasMany
    {
        return $this->hasMany(Lease::class);
    }

    public function maintenanceRequests(): HasMany
    {
        return $this->hasMany(MaintenanceRequest::class);
    }
}
