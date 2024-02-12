<?php

namespace TWS\Charts;

use Livewire\Livewire;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use TWS\Charts\Charts;
use TWS\Charts\Console\InstallCommand;
use TWS\Charts\Console\MakeChartCommand;
use TWS\Charts\Livewire\LivewireAreaChart;
use TWS\Charts\Livewire\LivewireBarChart;
use TWS\Charts\Livewire\LivewireDonutChart;
use TWS\Charts\Livewire\LivewireHeatMapChart;
use TWS\Charts\Livewire\LivewireHorizontalBar;
use TWS\Charts\Livewire\LivewireLineChart;
use TWS\Charts\Livewire\LivewirePieChart;
use TWS\Charts\Livewire\LivewirePolarAreaChart;
use TWS\Charts\Livewire\LivewireRadarChart;
use TWS\Charts\Livewire\LivewireRadialChart;

class ChartsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind('charts', function(){
            return new Charts;
        });

        $this->mergeConfigFrom($this->packageBasePath('config/charts.php'), 'charts');

        $this->commands([
            MakeChartCommand::class,
        ]);

        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallCommand::class,
            ]);
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->loadViewsFrom($this->packageBasePath('resources/views'), 'charts');

        $this->publishes([
            $this->packageBasePath('resources/js/charts') => public_path('vendor/charts')
        ], 'charts-apexcharts-script');

        $this->publishes([
            $this->packageBasePath('stubs/resources/views') => resource_path('views/vendor/charts')
        ], 'charts-views');

        $this->publishes([
            $this->packageBasePath('config/charts.php') => base_path('config/charts.php')
        ], 'charts-config');

        $this->publishes([
            $this->packageBasePath('stubs/stubs') => base_path('stubs')
        ], 'charts-stubs');

        Livewire::component('charts-area-chart', LivewireAreaChart::class);
        Livewire::component('charts-bar-chart', LivewireBarChart::class);
        Livewire::component('charts-donut-chart', LivewireDonutChart::class);
        Livewire::component('charts-heatmap-chart', LivewireHeatMapChart::class);
        Livewire::component('charts-horizontal-bar', LivewireHorizontalBar::class);
        Livewire::component('charts-line-chart', LivewireLineChart::class);
        Livewire::component('charts-pie-chart', LivewirePieChart::class);
        Livewire::component('charts-polar-chart', LivewirePolarAreaChart::class);
        Livewire::component('charts-radar-chart', LivewireRadarChart::class);
        Livewire::component('charts-radial-chart', LivewireRadialChart::class);

        Blade::directive('chartsScripts', function () {
            $scriptsUrl = asset('/vendor/charts/charts.js');
            return <<<EOF
<script src="$scriptsUrl"></script>
EOF;
        });
    }

    public function packageBasePath(string $path = ''): string
    {
        return __DIR__ . '/../' . $path;
    }
}
