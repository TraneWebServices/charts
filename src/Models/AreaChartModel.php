<?php

namespace TWS\Charts\Models;

use TWS\Charts\Contracts\AddsComplexDatas;
use TWS\Charts\Models\Traits\Aggregator\Complex;

class AreaChartModel extends ChartsBase implements AddsComplexDatas
{
    use Complex;

    public function __construct()
    {
        parent::__construct();
        $this->type = 'area';
    }

    public function addArea(string $name, array $data): AreaChartModel
    {
        return $this->addData($name, $data);
    }
}
