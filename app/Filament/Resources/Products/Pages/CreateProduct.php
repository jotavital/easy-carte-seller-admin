<?php

namespace App\Filament\Resources\Products\Pages;

use App\Filament\Resources\ProductResource;
use Filament\Facades\Filament;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateProduct extends CreateRecord
{
    protected static string $resource = ProductResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        return parent::handleRecordCreation(array_merge($data, [
            'store_id' => Filament::auth()->user()->store_id
        ]));
    }
}
