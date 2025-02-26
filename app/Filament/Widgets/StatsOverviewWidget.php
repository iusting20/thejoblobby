<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use Illuminate\Support\Facades\DB;

class StatsOverviewWidget extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Total Users', User::count())
                ->description('Total registered users')
                ->descriptionIcon('heroicon-o-user')
                ->color('success'),
                
            Card::make('New Users This Month', User::whereMonth('created_at', now()->month)->count())
                ->description('Users registered this month')
                ->descriptionIcon('heroicon-o-user-plus')
                ->color('primary'),
                
            Card::make('Active Users', User::where('email_verified_at', '!=', null)->count())
                ->description('Users with verified emails')
                ->descriptionIcon('heroicon-o-check-circle')
                ->color('warning'),
        ];
    }
} 