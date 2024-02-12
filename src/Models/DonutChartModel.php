<?php

namespace TWS\Charts\Models;

use TWS\Charts\Contracts\AddsSimpleDatas;
use TWS\Charts\Models\Traits\Aggregator\Simple;

class DonutChartModel extends ChartsBase implements AddsSimpleDatas
{
    use Simple;

    public function __construct()
    {
        parent::__construct();
        $this->type = 'donut';
    }

    public function addPieces(array $data): DonutChartModel
    {
        $this->addData($data);
        return $this;
    }
}
