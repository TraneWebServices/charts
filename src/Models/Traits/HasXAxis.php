<?php

namespace TWS\Charts\Models\Traits;

trait HasXAxis
{
    protected string $xAxis;

    public function setXAxis(array $categories): self
    {
        $this->xAxis = json_encode($categories);
        return $this;
    }

    protected function initXAxis(): void
    {
        $this->xAxis = $this->defaultXAxis();
    }

    private function defaultXAxis(): string
    {
        return json_encode([]);
    }

    public function xAxis(): string
    {
        return $this->xAxis;
    }
}
