<?php

namespace TWS\Charts\Tests\Unit;

use TWS\Charts\Facades\Charts;
use TWS\Charts\Tests\TestCase;
use Illuminate\Support\Facades\Artisan;

class ChartsTest extends TestCase
{
    /** @test */
    public function it_tests_charts_install_add_chart_stubs(): void
    {
        Artisan::call('vendor:publish --all');

        $chartTypes = collect([
            'PieChart',
            'DonutChart',
            'RadialBarChart',
            'PolarAreaChart',
            'LineChart',
            'AreaChart',
            'BarChart',
            'HorizontalBarChart',
            'HeatMapChart',
            'RadarChart',
        ]);

        $chartTypes->each(function ($chart) {
            $this->assertFileExists(
                __DIR__ . "/../../src/stubs/charts/Livewire/{$chart}.stub"
            );
        });
    }

    /** @test */
    public function it_tests_charts_can_load_script_correctly(): void
    {
        $chart = Charts::pieChart()
            ->setXAxis(['Jan', 'Feb', 'Mar'])
            ->setDataset([150, 120])
            ->setLabels([__('Published'), __('No Published')])
            ->setTitle('Posts');

        $this->assertEquals($chart->dataset(), "[150,120]");
    }

    /** @test */
    public function it_tests_charts_can_change_default_config_colors(): void
    {
        $chart = Charts::pieChart()
            ->setXAxis(['Jan', 'Feb', 'Mar'])
            ->setDataset([150, 120])
            ->setTitle('Posts');

        $oldColors = $chart->colors();
        $chart->setColors(['#fe9700', '#607c8a']);
        $this->assertNotEquals($oldColors, $chart->colors());
    }
}