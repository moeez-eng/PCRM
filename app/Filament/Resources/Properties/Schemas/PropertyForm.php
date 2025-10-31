<?php

namespace App\Filament\Resources\Properties\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Schemas\Schema;
use App\Models\Cities;


class PropertyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(4)
            ->components([
                // Date is auto-generated, so we don't show it in the form
                        Select::make('property_type')
                            ->options([
                                'apartment' => 'Apartment',
                                'house' => 'House',
                                'plaza' => 'Plaza',
                                'shop' => 'Shop',
                                'commercial' => 'Commercial',
                                'residential' => 'Residential',
                                'floor' => 'Floor',
                            ])->required()->columnSpan(1),
                        TextInput::make('plot_number')->required()->columnSpan(1),
                        Select::make('block')->options([
                            'jasmine' => 'Jasmine',
                            'rose' => 'Rose',
                            'lotus' => 'Lotus',
                            'iqbal' => 'Iqbal',
                        ])->required()->columnSpan(1),
                        Select::make('location')->options([
                            'Bahria Town' => 'Bahria Town',
                            'DHA' => 'DHA',
                            'Sabzazar' => 'Sabzazar',
                            'Ethad Town' => 'Ethad Town',
                        ])->required()->columnSpan(1),
                        Select::make('city')
                            ->options(fn () => Cities::query()
                                ->orderBy('name')
                                ->pluck('name', 'name')
                                ->toArray()
                            )
                            ->searchable()
                            ->preload()
                            ->required()
                            ->columnSpan(1),
                        TextInput::make('price')->numeric()->required()->columnSpan(1),
                        Select::make('category')->options([
                            'corner' => 'Corner',
                            'general' => 'General',
                            'facing park' => 'Facing Park',
                            'main boulevard' => 'Main Boulevard',
                            'cfp' => 'CFP',
                            'cmb' => 'CMB',
                        ])->required()->columnSpan(1),
                        TextInput::make('paid_status')->required()->columnSpan(1),
                        TextInput::make('c_type')->required()->columnSpan(1),
                        TextInput::make('contact_number')->tel()->required()->columnSpan(1),
                        TextInput::make('client_name')->required()->columnSpan(1),
                        Select::make('status')
                            ->options([
                                'available' => 'Available',
                                'sold' => 'Sold',
                                'rented' => 'Rented',
                            ])->required()->columnSpan(1),
                // End of form fields
            ]);
    }
}
