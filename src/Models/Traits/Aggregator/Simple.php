<?php

namespace T\Charts\Models\Traits\Aggregator;

trait Simple
{
    public function addData(array $data) :self
    {
        $this->dataset = json_encode($data);
        return $this;
    }
}
