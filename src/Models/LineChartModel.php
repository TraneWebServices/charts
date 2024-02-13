<?php

namespace T\Charts\Models;

use T\Charts\Contracts\AddsComplexDatas;
use T\Charts\Models\Traits\Aggregator\Complex;

class LineChartModel extends ChartsBase implements AddsComplexDatas
{
    use Complex;

    public function __construct()
    {
        parent::__construct();
        $this->type = 'line';
    }

    public function addLine(string $name, array $data): LineChartModel
    {
        return $this->addData($name, $data);
    }
}
