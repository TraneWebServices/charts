<?php

namespace T\Charts\Models;

use T\Charts\Contracts\AddsComplexDatas;
use T\Charts\Models\Traits\Aggregator\Complex;

class RadarChartModel extends ChartsBase implements AddsComplexDatas
{
    use Complex;

    public function __construct()
    {
        parent::__construct();
        $this->type = 'radar';
    }

    public function addSerie(string $name, array $data): RadarChartModel
    {
        return $this->addData($name, $data);
    }
}
