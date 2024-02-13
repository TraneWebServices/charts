<?php

namespace T\Charts\Models;

use T\Charts\Contracts\AddsSimpleDatas;
use T\Charts\Models\Traits\Aggregator\Simple;

class PieChartModel extends ChartsBase implements AddsSimpleDatas
{
    use Simple;

    public function __construct()
    {
        parent::__construct();
        $this->type = 'pie';
    }

    public function addPieces(array $data): PieChartModel
    {
        $this->addData($data);
        return $this;
    }
}
