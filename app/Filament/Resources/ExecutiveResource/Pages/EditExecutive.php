<?php

namespace App\Filament\Resources\ExecutiveResource\Pages;

use App\Filament\Resources\ExecutiveResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExecutive extends EditRecord
{
    protected static string $resource = ExecutiveResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
