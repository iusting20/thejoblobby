<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
use Filament\Widgets\AccountWidget;
use App\Filament\Widgets\StatsOverviewWidget;
use App\Filament\Widgets\LatestUsersWidget;
use App\Filament\Widgets\UsersChartWidget;
use App\Models\User;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class Dashboard extends BaseDashboard
{
    // Override the default widgets
    protected function getHeaderWidgets(): array
    {
        // Only show stats widget to non-Patient users
        /** @var User $user */
        $user = Auth::user();
        
        if ($user && $user->hasRole('Patient')) {
            return [];
        }
        
        return [
            StatsOverviewWidget::class,
        ];
    }

    protected function getFooterWidgets(): array
    {
        // Only show account widget to Patient users
        /** @var User $user */
        $user = Auth::user();
        
        if ($user && $user->hasRole('Patient')) {
            return [
                AccountWidget::class,
            ];
        }
        
        return [
            UsersChartWidget::class,
            LatestUsersWidget::class,
            AccountWidget::class,
        ];
    }
} 