<?php

namespace App\Filament\Resources\Properties\Pages;

use App\Filament\Resources\Properties\KarachiPropertyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKarachiProperties extends ListRecords
{
    protected static string $resource = KarachiPropertyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
