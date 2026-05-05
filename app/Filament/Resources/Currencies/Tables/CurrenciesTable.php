<?php

namespace App\Filament\Resources\Currencies\Tables;

use App\Models\Currency;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Tables\Columns;

class CurrenciesTable {
    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Columns\TextColumn::make('name')
                    ->label('Currency')
                    ->searchable()
                    ->sortable(),

                Columns\TextColumn::make('symbol')
                    ->label('Symbol'),

                Columns\TextColumn::make('value')
                    ->label('Rate')
                    ->formatStateUsing(fn ($state) => number_format($state, 4)),

                Columns\BadgeColumn::make('position')
                    ->colors([
                        'success' => 'before',
                        'warning' => 'after',
                    ]),

                Columns\IconColumn::make('is_default')
                    ->label('Default')
                    ->boolean(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),

                Tables\Actions\Action::make('make_default')
                    ->label('Set Default')
                    ->color('success')
                    ->action(function ($record) {

                        Currency::query()->update([
                            'is_default' => false,
                        ]);

                        $record->update([
                            'is_default' => true,
                        ]);
                    }),

                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}
