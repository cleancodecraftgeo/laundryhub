<?php

namespace App\Filament\Resources\Currencies\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Schema;

class CurrencyForm
{
    public static function form(Form $form): Form
{
    return $form
        ->schema([
            TextInput::make('name')
                ->required()
                ->label('Currency Name (USD, GEL)'),

            TextInput::make('symbol')
                ->required()
                ->label('Symbol ($, ₾, €)'),

            TextInput::make('value')
                ->numeric()
                ->default(1)
                ->label('Exchange Rate'),

            Select::make('position')
                ->options([
                    'before' => 'Before ( $50 )',
                    'after' => 'After ( 50₾ )',
                ])
                ->default('before'),

            Toggle::make('is_default')
                ->label('Default Currency'),
        ]);
}
}
