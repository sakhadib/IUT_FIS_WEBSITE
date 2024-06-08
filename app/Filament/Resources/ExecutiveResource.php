<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExecutiveResource\Pages;
use App\Filament\Resources\ExecutiveResource\RelationManagers;
use App\Models\Executive;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;

class ExecutiveResource extends Resource
{
    protected static ?string $model = Executive::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('member_id')
                    ->label('Member ID')
                    ->placeholder('')
                    ->required(),
                TextInput::make('position')
                    ->label('Position')
                    ->placeholder('President')
                    ->required(),
                TextInput::make('panel_range')
                    ->label('Panel Range')
                    ->placeholder('2022-23')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('member_id')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('position')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('panel_range')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('created_at')
                    ->sortable('desc')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListExecutives::route('/'),
            'create' => Pages\CreateExecutive::route('/create'),
            'edit' => Pages\EditExecutive::route('/{record}/edit'),
        ];
    }
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
}
