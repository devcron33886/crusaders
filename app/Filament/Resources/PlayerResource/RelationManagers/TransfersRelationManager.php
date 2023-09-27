<?php

namespace App\Filament\Resources\PlayerResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class TransfersRelationManager extends RelationManager
{
    protected static string $relationship = 'transfers';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('player_id')
                    ->relationship('player', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),
                Forms\Components\DatePicker::make('transfer_date')
                    ->required(),
                Forms\Components\TextInput::make('transfer_type')
                    ->required(),
                Forms\Components\TextInput::make('transfer_reason')
                    ->required(),
                Forms\Components\TextInput::make('transfer_status')
                    ->required(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('transfer_date')
            ->columns([
                Tables\Columns\TextColumn::make('player.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('transfer_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('transfer_type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('transfer_reason')
                    ->searchable(),
                Tables\Columns\TextColumn::make('transfer_status')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }
}
