<?php

namespace T\Charts;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use T\Charts\Charts;
use T\Charts\Console\InstallCommand;
use T\Charts\Console\MakeChartCommand;

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

        Livewire::component('charts-area-chart', \T\Charts\Livewire\LivewireAreaChart::class);
        Livewire::component('charts-bar-chart', \T\Charts\Livewire\LivewireBarChart::class);
        Livewire::component('charts-donut-chart', \T\Charts\Livewire\LivewireDonutChart::class);
        Livewire::component('charts-heatmap-chart', \T\Charts\Livewire\LivewireHeatMapChart::class);
        Livewire::component('charts-horizontal-bar', \T\Charts\Livewire\LivewireHorizontalBar::class);
        Livewire::component('charts-line-chart', \T\Charts\Livewire\LivewireLineChart::class);
        Livewire::component('charts-pie-chart', \T\Charts\Livewire\LivewirePieChart::class);
        Livewire::component('charts-polar-chart', \T\Charts\Livewire\LivewirePolarAreaChart::class);
        Livewire::component('charts-radar-chart', \T\Charts\Livewire\LivewireRadarChart::class);
        Livewire::component('charts-radial-chart', \T\Charts\Livewire\LivewireRadialChart::class);

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
