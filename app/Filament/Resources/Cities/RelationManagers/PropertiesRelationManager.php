<?php

namespace App\Filament\Resources\Cities\RelationManagers;

use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Hidden;
use Filament\Schemas\Schema;

class PropertiesRelationManager extends RelationManager
{
    protected static string $relationship = 'properties';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                // City is set automatically from the parent Cities record
                Hidden::make('city'),

                Select::make('property_type')
                    ->options([
                        'apartment' => 'Apartment',
                        'house' => 'House',
                        'plaza' => 'Plaza',
                        'shop' => 'Shop',
                        'commercial' => 'Commercial',
                        'residential' => 'Residential',
                        'floor' => 'Floor',
                    ])->required(),

                TextInput::make('plot_number')->required(),

                Select::make('block')->options([
                    'jasmine' => 'Jasmine',
                    'rose' => 'Rose',
                    'lotus' => 'Lotus',
                    'iqbal' => 'Iqbal',
                ])->required(),

                Select::make('location')->options([
                    'Bahria Town' => 'Bahria Town',
                    'DHA' => 'DHA',
                    'Sabzazar' => 'Sabzazar',
                    'Ethad Town' => 'Ethad Town',
                ])->required(),

                TextInput::make('price')->numeric()->required(),

                Select::make('category')->options([
                    'corner' => 'Corner',
                    'general' => 'General',
                    'facing park' => 'Facing Park',
                    'main boulevard' => 'Main Boulevard',
                    'cfp' => 'CFP',
                    'cmb' => 'CMB',
                ])->required(),

                TextInput::make('paid_status')->required(),
                TextInput::make('c_type')->required(),
                TextInput::make('contact_number')->tel()->required(),
                TextInput::make('client_name')->required(),

                Select::make('status')->options([
                    'available' => 'Available',
                    'sold' => 'Sold',
                    'rented' => 'Rented',
                ])->required(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('date')->label('Date')->sortable(),
                TextColumn::make('property_type')->label('Property Type')->sortable(),
                TextColumn::make('plot_number')->label('Plot Number')->sortable(),
                TextColumn::make('block')->label('Block')->sortable(),
                TextColumn::make('location')->label('Location')->sortable(),
                TextColumn::make('client_name')->label('Client')->searchable(),
                TextColumn::make('price')->label('Price')->sortable(),
                TextColumn::make('category')->label('Category')->sortable(),
                TextColumn::make('paid_status')->label('Paid Status')->sortable(),
                TextColumn::make('c_type')->label('C Type')->sortable(),
                TextColumn::make('contact_number')->label('Contact Number')->sortable(),
                TextColumn::make('client_name')->label('Client')->searchable(),
                TextColumn::make('status')->label('Status')->badge(),
               
            ]);
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['city'] = $this->getOwnerRecord()->name;
        $data['date'] = now()->toDateString();
        return $data;
    }
}
