<?php

namespace App\Providers;

use ConsoleTVs\Charts\Registrar as Charts;
use App\Charts\Samu\EventByCommune;
use App\Charts\Samu\EventByMobile;
use App\Charts\Samu\EventByMonth;
use App\Charts\Samu\EventBySex;
use App\Charts\Samu\EventLastMonth;
use App\Charts\Samu\SampleChart;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Charts $charts)
    {
        Paginator::useBootstrap();
        $charts->register([
            \App\Charts\HoursBySpecialtyChart::class
        ]);
    }
}
