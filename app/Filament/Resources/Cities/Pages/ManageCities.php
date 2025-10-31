<?php

namespace App\Filament\Resources\Cities\Pages;

use App\Filament\Resources\Cities\CitiesResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageCities extends ManageRecords
{
    protected static string $resource = CitiesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
