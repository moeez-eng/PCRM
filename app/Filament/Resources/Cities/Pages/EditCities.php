<?php

namespace App\Filament\Resources\Cities\Pages;

use App\Filament\Resources\Cities\CitiesResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\Concerns\HasRelationManagers;

class EditCities extends EditRecord
{
    use HasRelationManagers;

    protected static string $resource = CitiesResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getUpdatedNotificationTitle(): ?string
    {
        return 'City updated successfully';
    }

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
