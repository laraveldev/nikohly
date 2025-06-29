<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GuideResource\Pages;
use App\Filament\Resources\GuideResource\RelationManagers;
use App\Models\Guide;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GuideResource extends Resource
{
    protected static ?string $model = Guide::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('type_id')
                    ->relationship('type', 'name')
                    ->required(),
                Forms\Components\TextInput::make('title')->required(),
                Forms\Components\TextInput::make('slug'),
                Forms\Components\Textarea::make('content'),
                Forms\Components\TextInput::make('author'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('type.name')->label('Type'),
                Tables\Columns\TextColumn::make('title')->searchable(),
                Tables\Columns\TextColumn::make('author'),
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
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageGuides::route('/'),
        ];
    }
}
