<?php

namespace App\Filament\Resources\Sermons\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SermonForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('slug')
                    ->required(),
                TextInput::make('title')
                    ->required(),
                TextInput::make('speaker')
                    ->required(),
                TextInput::make('category')
                    ->required(),
                Textarea::make('excerpt')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('body')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('duration')
                    ->default(null),
                DateTimePicker::make('published_at'),
                TextInput::make('video_url')
                    ->url()
                    ->default(null),
                TextInput::make('audio_url')
                    ->url()
                    ->default(null),
                TextInput::make('thumbnail_path')
                    ->default(null),
            ]);
    }
}
