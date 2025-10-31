<?php

namespace App\Filament\Resources\Cities\Pages;

use App\Filament\Resources\Cities\CitiesResource;
use Filament\Resources\Pages\ViewRecord;
use Filament\Resources\Pages\Concerns\HasRelationManagers;

class ViewCities extends ViewRecord
{
    use HasRelationManagers;

    protected static string $resource = CitiesResource::class;
}
