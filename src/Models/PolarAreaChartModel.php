<?php

namespace T\Charts\Models;

use T\Charts\Contracts\AddsSimpleDatas;
use T\Charts\Models\Traits\Aggregator\Simple;

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
