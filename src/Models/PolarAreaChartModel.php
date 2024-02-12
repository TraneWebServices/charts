<?php

namespace TWS\Charts\Models;

use TWS\Charts\Contracts\AddsSimpleDatas;
use TWS\Charts\Models\Traits\Aggregator\Simple;

class PolarAreaChartModel extends ChartsBase implements AddsSimpleDatas
{
    use Simple;

    public function __construct()
    {
        parent::__construct();
        $this->type = 'polarArea';
    }

    public function addPolarAreas(array $data): PolarAreaChartModel
    {
        $this->addData($data);
        return $this;
    }
}
