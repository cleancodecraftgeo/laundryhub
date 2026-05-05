<?php

namespace App\Filament\Resources\Currencies;

use App\Models\Currency;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Forms\Components;

class CurrencyResource extends Resource
{
    protected static ?string $model = Currency::class;

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Components\TextInput::make('name')->required(),

            Components\TextInput::make('symbol')->required(),

            Components\TextInput::make('value')
                ->numeric()
                ->default(1),

            Components\Select::make('position')->options([
                'before' => 'Before',
                'after' => 'After',
            ]),

            Components\Toggle::make('is_default'),
        ]);
    }
}
