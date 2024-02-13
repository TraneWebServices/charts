<?php

namespace T\Charts;

use T\Charts\Models\AreaChartModel;
use T\Charts\Models\BarChartModel;
use T\Charts\Models\DonutChartModel;
use T\Charts\Models\HeatMapChartModel;
use T\Charts\Models\HorizontalBarModel;
use T\Charts\Models\LineChartModel;
use T\Charts\Models\PieChartModel;
use T\Charts\Models\PolarAreaChartModel;
use T\Charts\Models\RadarChartModel;
use T\Charts\Models\RadialChartModel;

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
