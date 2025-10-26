<?php

namespace App\Filament\Resources\Customers\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CustomersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('full_name')->searchable()
                    ->label('Nome Completo'),
                TextColumn::make('cpf')->searchable()
                    ->label('CPF'),
                TextColumn::make('sex')
                    ->getStateUsing(fn($record) => $record->sex?->value)
                    ->searchable()
                    ->label('Sexo'),
                TextColumn::make('civil_status')
                    ->getStateUsing(fn($record) => $record->civil_status?->value)
                    ->searchable()
                    ->label('Estado Civil'),
                TextColumn::make('contacts.cell_phone')
                    ->label('Celular/Whatsapp')
                    ->searchable(),
                TextColumn::make('status')
                    ->getStateUsing(fn($record) => $record->status?->value)
                    ->searchable(),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')

                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
