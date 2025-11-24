<?php

namespace App\Filament\Resources\Organizations\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Forms\Components\TextInput;
use Filament\Support\Icons\Heroicon;
use OtavioAraujo\FilamentSmartCep\Forms\Components\SmartCep;

class OrganizationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Tabs')
                    ->tabs([
                        Tab::make('Informações da Organização')
                            ->schema([
                                TextInput::make('cnpj')
                                    ->label('CNPJ')
                                    ->mask('99.999.999/9999-99')
                                    ->unique()
                                    ->required(),                                
                                TextInput::make('nome')
                                    ->required(),
                                SmartCep::make('cep')
                                    ->bindStreetField('endereco')
                                    ->bindCityField('cidade')
                                    ->bindStateField('estado')
                                    ->actionIcon(Heroicon::MagnifyingGlass),
                                TextInput::make('endereco'),
                                TextInput::make('cidade'),
                                TextInput::make('estado'),
                                TextInput::make('contato')                                
                                    ->mask('(99)9 9999-9999'),
                            ])->columns(2),

                    ])->columnSpan('full')
            ]);
    }
}
