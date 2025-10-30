<?php

namespace App\Filament\Resources\Properties;

use App\Filament\Resources\Properties\Pages\CreateKarachiProperty;
use App\Filament\Resources\Properties\Pages\EditKarachiProperty;
use App\Filament\Resources\Properties\Pages\ListKarachiProperties;
use App\Filament\Resources\Properties\Schemas\PropertyForm;
use App\Filament\Resources\Properties\Tables\PropertiesTable;
use App\Models\Property;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use Illuminate\Database\Eloquent\Builder;

class KarachiPropertyResource extends Resource
{
    protected static ?string $model = Property::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBuildingOffice2;

    protected static ?string $navigationLabel = 'Karachi Properties';

    protected static ?string $recordTitleAttribute = 'client_name';

    public static function form(Schema $schema): Schema
    {
        return PropertyForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PropertiesTable::table($table);
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('city', 'Karachi');
    }

    public static function getPages(): array
    {
        return [
            'index' => ListKarachiProperties::route('/'),
            'create' => CreateKarachiProperty::route('/create'),
            'edit' => EditKarachiProperty::route('/{record}/edit'),
        ];
    }
}
