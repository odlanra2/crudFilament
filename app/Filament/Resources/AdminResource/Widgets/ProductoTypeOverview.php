<?php

namespace App\Filament\Resources\AdminResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

use App\Models\Producto;

class ProductoTypeOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Precio', Producto::query()->where('precio')->count())
            //
        ];
    }
}
