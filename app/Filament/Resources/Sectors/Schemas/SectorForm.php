<?php

namespace App\Filament\Resources\Sectors\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class SectorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nome')->required(),
                TextInput::make('sigla')->required(),
            ]);
    }
}
