<?php

namespace App\Filament\Resources\Products\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;

use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

use Filament\Tables\Table;

class ProductsTable
{
    public static function configure(Table $table): Table
    {


        return $table
            ->columns([
                // TextColumn::make('id')
                //     ->label('ID')
                //     ->searchable(),


                TextColumn::make('category.name_en')
                    ->label('Category')
                    ->searchable(),

                TextColumn::make('title')
                    ->label('Name')
                    ->getStateUsing(fn($record) => $record->title)
                    ->searchable(query: function ($query, string $search) {
                        $query->whereHas('translations', function ($q) use ($search) {
                            $q->where('title', 'like', "%{$search}%");
                        });
                    }),

                ImageColumn::make('thumbnail')
                    ->label('Image'),


                TextColumn::make('price')
                    ->money()
                    ->sortable()
                    ->visible(fn($record) => $record?->show_price),


                IconColumn::make('show_price')
                    ->boolean()
                    ->label('Show Price'),

                TextColumn::make('status')
                    ->badge(),

                TextColumn::make('unit_id')
                    ->label('Unit')
                    ->searchable(),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('article')
                    ->label('Article')
                    ->searchable(),

                TextColumn::make('barcode')
                    ->label('Barcode')
                    ->searchable(),

                
            ])


            ->filters([
                //
            ])

            // ✅ row actions
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])

            // ✅ bulk actions
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
