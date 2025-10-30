<?php

namespace App\Filament\Resources\Properties\Pages;

use App\Filament\Resources\Properties\KarachiPropertyResource;
use Filament\Resources\Pages\CreateRecord;

class CreateKarachiProperty extends CreateRecord
{
    protected static string $resource = KarachiPropertyResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['date'] = now()->toDateString();
        // Ensure city is set to Karachi for this resource
        $data['city'] = 'Karachi';
        return $data;
    }
}
