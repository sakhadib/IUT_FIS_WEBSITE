<?php

namespace App\Filament\Resources\ExecutiveResource\Pages;

use App\Filament\Resources\ExecutiveResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExecutives extends ListRecords
{
    protected static string $resource = ExecutiveResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
