<?php

namespace T\Charts\Models\Traits;

trait HasDataSet
{
    protected string $dataset = '';

    public function setDataset(array $dataset): self
    {
        $this->dataset = json_encode($dataset);
        return $this;
    }

    public function dataset(): string
    {
        return $this->dataset;
    }
}
