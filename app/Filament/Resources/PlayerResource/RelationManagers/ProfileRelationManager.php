<?php

namespace App\Filament\Resources\PlayerResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class ProfileRelationManager extends RelationManager
{
    protected static string $relationship = 'profile';

    public function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\TextInput::make('ocupation')
                    ->required(),
                Forms\Components\TextInput::make('mother')
                    ->required(),
                Forms\Components\TextInput::make('father')
                    ->required(),
                Forms\Components\TextInput::make('mother_mobile')
                    ->required(),
                Forms\Components\TextInput::make('father_mobile')
                    ->required(),
                Forms\Components\TextInput::make('resident_place')
                    ->required(),
                SpatieMediaLibraryFileUpload::make('profile'),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('profile')
            ->columns([
                Tables\Columns\TextColumn::make('ocupation')
                    ->searchable(),
                Tables\Columns\TextColumn::make('mother')
                    ->searchable(),
                Tables\Columns\TextColumn::make('father')
                    ->searchable(),
                Tables\Columns\TextColumn::make('mother_mobile')
                    ->searchable(),
                Tables\Columns\TextColumn::make('father_mobile')
                    ->searchable(),
                Tables\Columns\TextColumn::make('resident_place')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }
}
