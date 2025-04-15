<?php

namespace App\Filament\Widgets;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{

    protected static ?int $sort = 1;
    protected static ?string $pollingInterval = '15s';

    protected static bool $isLazy = true;

    protected function getStats(): array
    {
        return [
            Stat::make('Người dùng', User::count())
                ->description('Tăng trưởng người dùng')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success')
                ->chart([7, 3, 4, 5, 6, 3, 5, 3]),
            
            Stat::make('Sản phẩm', Product::count())
                ->description('Tăng trưởng sản phẩm')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success')
                ->chart([4, 5, 6, 3, 5, 3, 5, 3]),
            
            Stat::make('Danh mục',  Category::count())
                ->description('Tăng trưởng danh mục')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success')
                ->chart([3, 5, 6, 3, 5, 3, 5, 3]),

            
        ];
    }
}
