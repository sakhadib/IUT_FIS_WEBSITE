<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReporterResource\Pages;
use App\Filament\Resources\ReporterResource\RelationManagers;
use App\Models\Reporter;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;

class ReporterResource extends Resource
{
    protected static ?string $model = Reporter::class;

    protected static ?string $navigationIcon = 'heroicon-s-video-camera';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('member_id')
                    ->label('Member ID')
                    ->placeholder('123456')
                    ->required(),
                TextInput::make('password')
                    ->label('Password')
                    ->placeholder('********')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('member_id')
                    ->sortable()
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
            'index' => Pages\ListReporters::route('/'),
            'create' => Pages\CreateReporter::route('/create'),
            'edit' => Pages\EditReporter::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
}
