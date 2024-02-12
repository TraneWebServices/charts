<?php

namespace TWS\Charts\Models;

use TWS\Charts\Contracts\AddsSimpleDatas;
use TWS\Charts\Models\Traits\Aggregator\Simple;

class RadialChartModel extends ChartsBase implements AddsSimpleDatas
{
    use Simple;

    public function __construct()
    {
        parent::__construct();
        $this->type = 'radialBar';
    }

    public function addRings(array $data): RadialChartModel
    {
        $this->addData($data);
        return $this;
    }
}
