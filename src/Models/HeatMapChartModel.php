<?php

namespace TWS\Charts\Models;

use TWS\Charts\Contracts\AddsComplexDatas;
use TWS\Charts\Models\Traits\Aggregator\Complex;

class HeatMapChartModel extends ChartsBase implements AddsComplexDatas
{
    use Complex;

    public function __construct()
    {
        parent::__construct();
        $this->type = 'heatmap';
    }

    public function addHeat(string $name, array $data): HeatMapChartModel
    {
        return $this->addData($name, $data);
    }
}
