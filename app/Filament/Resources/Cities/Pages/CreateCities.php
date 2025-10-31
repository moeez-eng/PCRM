<?php

namespace App\Filament\Resources\Cities\Pages;

use App\Filament\Resources\Cities\CitiesResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCities extends CreateRecord
{
    protected static string $resource = CitiesResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'City created successfully';
    }
}

