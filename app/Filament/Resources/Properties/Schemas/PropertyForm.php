<?php

namespace App\Filament\Resources\Properties\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Schemas\Schema;

class PropertyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                DatePicker::make('date')->required()->default(now()),
                Select::make('property_type')->options([
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
                Select::make('city')->options([
                    'Lahore' => 'Lahore',
                    'Islamabad' => 'Islamabad',
                    'Karachi' => 'Karachi',
                    'Peshawar' => 'Peshawar',
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
                Select::make('status')
                    ->options([
                        'available' => 'Available',
                        'sold' => 'Sold',
                        'rented' => 'Rented',
                    ])->required(),
            ]);
    }
}
