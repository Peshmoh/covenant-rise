<?php

namespace App\Filament\Resources\PrayerRequests\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PrayerRequestForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->default(null),
                TextInput::make('phone')
                    ->tel()
                    ->default(null),
                TextInput::make('subject')
                    ->default(null),
                Textarea::make('message')
                    ->required()
                    ->columnSpanFull(),
                Toggle::make('is_confidential')
                    ->required(),
                DateTimePicker::make('handled_at'),
            ]);
    }
}
