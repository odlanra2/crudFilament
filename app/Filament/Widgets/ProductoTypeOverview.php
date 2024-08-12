<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Producto;

class ProductoTypeOverview extends BaseWidget
{
    protected function getStats(): array
    {
       $all = Producto::all();
       $inve = 0;  
       foreach($all as $a){
             $inve+= $a->stock;
       }

       
        return [
            Stat::make('Total productos', Producto::query()->count()),
            Stat::make('Total Inventario', $inve)
        ];
    }
}
