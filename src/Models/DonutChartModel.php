<?php

namespace T\Charts\Models;

use T\Charts\Contracts\AddsSimpleDatas;
use T\Charts\Models\Traits\Aggregator\Simple;

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
