<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RecruitmentResource\Pages;
use App\Models\Recruitment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class RecruitmentResource extends Resource
{
    protected static ?string $model = Recruitment::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Players Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('player_id')
                    ->relationship('player', 'name')
                    ->required(),
                Forms\Components\TextInput::make('recruiter')
                    ->required(),
                Forms\Components\DatePicker::make('recruitment_date')
                    ->required(),
                Forms\Components\Textarea::make('scouting_report')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('report_file')
                    ->required(),
                Forms\Components\TextInput::make('recruitment_status')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('player.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('recruiter')
                    ->searchable(),
                Tables\Columns\TextColumn::make('recruitment_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('report_file')
                    ->searchable(),
                Tables\Columns\TextColumn::make('recruitment_status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                //
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageRecruitments::route('/'),
        ];
    }
}
