<?php

namespace App\Filament\Resources\Properties\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Filters\SelectFilter;

class PropertiesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('date')->label('Date')->sortable()->searchable(),
                TextColumn::make('property_type')->label('Property Type')->sortable()->searchable(),
                TextColumn::make('plot_number')->label('Plot Number')->sortable()->searchable(),
                TextColumn::make('block')->label('Block')->sortable()->searchable(),
                TextColumn::make('city')->label('City')->sortable()->searchable(),
                TextColumn::make('price')->label('Price')->sortable(),
                TextColumn::make('category')->label('Category')->sortable()->searchable(),
                TextColumn::make('paid_status')->label('Paid Status')->sortable()->searchable(),
                TextColumn::make('c_type')->label('C Type')->sortable()->searchable(),
                TextColumn::make('contact_number')->label('Contact Number')->sortable()->searchable(),
                TextColumn::make('status')->label('Status')->badge()->sortable(),
                TextColumn::make('created_at')->dateTime()->since()->label('Created'),
            ])
            ->filters([
                SelectFilter::make('status')->label('Status')
                    ->options([
                        'available' => 'Available',
                        'sold' => 'Sold',
                        'rented' => 'Rented',
                    ])
                    ->default('available'),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
