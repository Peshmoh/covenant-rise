<?php

namespace App\Filament\Resources\Testimonies\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class TestimonyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('role')
                    ->default(null),
                Textarea::make('quote')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('avatar')
                    ->default(null),
                TextInput::make('stars')
                    ->required()
                    ->numeric()
                    ->default(5),
                Toggle::make('is_published')
                    ->required(),
                TextInput::make('position')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
