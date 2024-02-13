<?php

namespace T\Charts\Models;

use T\Charts\Contracts\AddsComplexDatas;
use T\Charts\Models\Traits\Aggregator\Complex;

class HorizontalBarModel extends ChartsBase implements AddsComplexDatas
{
    use Complex;

    public function __construct()
    {
        parent::__construct();
        $this->type = 'bar';
        $this->horizontal = json_encode(['horizontal' => true]);
    }

    public function addBar(string $name, array $data): HorizontalBarModel
    {
        return $this->addData($name, $data);
    }
}
