<?php

namespace TWS\Charts;

use TWS\Charts\Models\AreaChartModel;
use TWS\Charts\Models\BarChartModel;
use TWS\Charts\Models\DonutChartModel;
use TWS\Charts\Models\HeatMapChartModel;
use TWS\Charts\Models\HorizontalBarModel;
use TWS\Charts\Models\LineChartModel;
use TWS\Charts\Models\PieChartModel;
use TWS\Charts\Models\PolarAreaChartModel;
use TWS\Charts\Models\RadarChartModel;
use TWS\Charts\Models\RadialChartModel;

class Charts
{
    public function pieChart(): PieChartModel
    {
        return new PieChartModel;
    }

    public function donutChart(): DonutChartModel
    {
        return new DonutChartModel;
    }

    public function radialChart(): RadialChartModel
    {
        return new RadialChartModel();
    }

    public function polarAreaChart(): PolarAreaChartModel
    {
        return new PolarAreaChartModel;
    }

    public function lineChart(): LineChartModel
    {
        return new LineChartModel;
    }

    public function areaChart(): AreaChartModel
    {
        return new AreaChartModel;
    }

    public function barChart(): BarChartModel
    {
        return new BarChartModel;
    }

    public function horizontalBarChart(): HorizontalBarModel
    {
        return new HorizontalBarModel;
    }

    public function heatMapChart(): HeatMapChartModel
    {
        return new HeatMapChartModel;
    }

    public function radarChart(): RadarChartModel
    {
        return new RadarChartModel;
    }
}
