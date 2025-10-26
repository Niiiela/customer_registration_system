<?php

namespace App\Filament\Resources\Customers\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;


class CustomerInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('full_name')->label('Nome Completo'),
                TextEntry::make('date_birth')->date()->label('Data de Nascimento'),
                TextEntry::make('cpf')->label('CPF'),
                TextEntry::make('rg')->label('RG'),
                TextEntry::make('issuing_authority')->label('Órgão Emissor'),
                TextEntry::make('state')->label('Estado'),
                TextEntry::make('sex')->label('Sexo'),
                TextEntry::make('civil_status')->label('Estado Civil'),
                TextEntry::make('contacts.cell_phone')->label('Celular/Whatsapp'),
                TextEntry::make('contacts.email')->label('E-mail'),
                TextEntry::make('addresses.street')->label('Rua'),
                TextEntry::make('addresses.number')->label('Número'),
                TextEntry::make('addresses.neighborhood')->label('Bairro'),
                TextEntry::make('addresses.city')->label('Cidade'),
                TextEntry::make('addresses.state')->label('Estado'),
                TextEntry::make('addresses.zip_code')->label('CEP'),
                TextEntry::make('status')->label('Status'),

            ]);
    }
}
