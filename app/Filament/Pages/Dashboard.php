<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
use Filament\Widgets\AccountWidget;
use App\Filament\Widgets\StatsOverviewWidget;
use App\Filament\Widgets\LatestUsersWidget;
use App\Filament\Widgets\UsersChartWidget;
use App\Models\User;
use App\Models\Booking;

class Dashboard extends BaseDashboard
{
    // Override the default widgets
    protected function getHeaderWidgets(): array
    {
        return [
            StatsOverviewWidget::class,
        ];
    }

    protected function getFooterWidgets(): array
    {
        return [
            UsersChartWidget::class,
            LatestUsersWidget::class,
            AccountWidget::class,
        ];
    }
} 