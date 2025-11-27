<?php

namespace App\Filament\Resources\Positions\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class PositionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nome')->required(),
            ]);
    }
}
