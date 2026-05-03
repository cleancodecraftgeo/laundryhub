<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('category_id')
                    ->required(),
                FileUpload::make('image')
                    ->image(),
                TextInput::make('price')
                    ->numeric()
                    ->prefix('$'),
                Select::make('status')
                    ->options(['active' => 'Active', 'inactive' => 'Inactive', 'outstock' => 'Outstock'])
                    ->default('active')
                    ->required(),
                TextInput::make('unit_id'),

                Toggle::make('show_price')
                    ->label('Qiymeti goster')
                    ->default(false),

                FileUpload::make('thumbnail')
                ->label('Thumbnail')
                ->image()
                ->directory('products')
                ->imagePreviewHeight('150'),


              Section::make('SEO')
                    ->relationship('seo') 
                    ->schema([
                        TextInput::make('meta_title'),

                        Textarea::make('meta_description'),

                        TextInput::make('keywords'),

                        TextInput::make('canonical'),
                    ]),
            ]);
    }
}
