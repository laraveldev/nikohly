<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VendorResource\Pages;
use App\Filament\Resources\VendorResource\RelationManagers;
use App\Models\Vendor;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Infolists;
use Filament\Infolists\Infolist;
use Filament\Infolists\Components\TextEntry;

class VendorResource extends Resource
{
    protected static ?string $model = Vendor::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                Forms\Components\TextInput::make('name')->required(),
                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->maxLength(20)
                    ->required(),
                Forms\Components\TextInput::make('email'),
                Forms\Components\TextInput::make('location'),
                Forms\Components\Textarea::make('description'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')->label('User')->toggleable(),
                Tables\Columns\TextColumn::make('name')->searchable()->toggleable(),
                Tables\Columns\TextColumn::make('phone')->toggleable(),
                Tables\Columns\TextColumn::make('email')->toggleable(),
                Tables\Columns\TextColumn::make('location')->toggleable(),
                Tables\Columns\TextColumn::make('description')->limit(30)->toggleable(),
                Tables\Columns\TextColumn::make('created_at')->label('Created At')->dateTime('Y-m-d H:i')->toggleable(),
                Tables\Columns\TextColumn::make('updated_at')->label('Updated At')->dateTime('Y-m-d H:i')->toggleable(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make()
                    ->label('Details')
                    ->icon('heroicon-o-eye'),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Infolists\Components\Section::make('Vendor Details')
                    ->schema([
                        TextEntry::make('name')->label('Name')->weight('bold')->size('lg'),
                        TextEntry::make('user.name')->label('Owner (User)'),
                        TextEntry::make('email')->label('Email')->copyable(),
                        TextEntry::make('phone')->label('Phone')->copyable(),
                        TextEntry::make('location')->label('Location'),
                        TextEntry::make('description')->label('Description')->markdown(),
                    ])->columns(2),
                Infolists\Components\Section::make('Timestamps')
                    ->schema([
                        TextEntry::make('created_at')->label('Created At')->dateTime('Y-m-d H:i'),
                        TextEntry::make('updated_at')->label('Updated At')->dateTime('Y-m-d H:i'),
                    ])->columns(2),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageVendors::route('/'),
            'view' => Pages\ViewVendor::route('/{record}'),
        ];
    }
}
