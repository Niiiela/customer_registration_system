<?php

namespace App\Filament\Resources\Customers\Schemas;

use App\Enums\CustomerEnum;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Tabs as ComponentsTabs;
use Filament\Schemas\Components\Tabs\Tab as TabsTab;
use Filament\Schemas\Schema;


class CustomerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                ComponentsTabs::make('CustomerTabs')
                    ->tabs([
                        TabsTab::make('Dados do Cliente')
                            ->columns(2)
                            ->schema([
                                TextInput::make('full_name')->label('Nome Completo')->required(),
                                DatePicker::make('date_birth')->label('Data de Nascimento')->displayFormat('d/m/Y'),
                                TextInput::make('cpf')
                                    ->label('CPF')
                                    ->mask('999.999.999-99')
                                    ->stripCharacters('.')
                                    ->stripCharacters('-')
                                    ->placeholder('000.000.000-00')
                                    ->required(),
                                TextInput::make('rg')
                                    ->label('RG')
                                    ->mask('99.999.999-9')
                                    ->stripCharacters('.')
                                    ->stripCharacters('-')
                                    ->placeholder('00.000.000-0'),
                                Select::make('issuing_authority')->label('Órgão Emissor')->options(CustomerEnum::issuing_authority()),
                                Select::make('state')->label('Estado')->options(CustomerEnum::state()),
                                Select::make('sex')->label('Sexo')->options(CustomerEnum::sex()),
                                Select::make('civil_status')->label('Estado Civil')->options(CustomerEnum::maritalStatus()),
                                Select::make('status')->label('Status')->options(CustomerEnum::status())->default('Ativo')->required(),
                            ]),
                        TabsTab::make('Contatos')
                            ->schema([
                                Repeater::make('contacts')
                                    ->columns(2)
                                    ->label('contatos')
                                    ->relationship('contacts')
                                    ->schema([
                                        TextInput::make('cell_phone')
                                            ->label('Celular / WhatsApp')
                                            ->mask('(99) 9 9999-9999')
                                            ->stripCharacters(['(', ')', ' ', '-'])
                                            ->placeholder('(00) 9 0000-0000')
                                            ->required(),
                                        TextInput::make('email')
                                            ->label('E-mail')
                                            ->email()
                                            ->placeholder('exemplo@gmail.com')
                                            ->unique(ignorable: fn($record) => $record),
                                    ]),
                            ]),
                        TabsTab::make('Endereços')
                            ->schema([
                                Repeater::make('addresses')
                                    ->relationship('addresses')
                                    ->label('Endereços')
                                    ->columns(3)
                                    ->schema([
                                        TextInput::make('street')->label('Rua')->required(),
                                        TextInput::make('number')->label('Número')->required(),
                                        TextInput::make('neighborhood')->label('Bairro'),
                                        TextInput::make('city')->label('Cidade')->required(),
                                        Select::make('state')->label('Estado')->options(CustomerEnum::state())->required(),
                                        TextInput::make('zip_code')
                                            ->label('CEP')
                                            ->mask('99999-999')
                                            ->stripCharacters('-')
                                            ->placeholder('00000-000')
                                            ->required(),
                                    ]),
                            ]),
                    ])
            ])->columns(1);
    }
}
