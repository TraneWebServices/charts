<?php

namespace T\Charts\Models\Traits;

trait HasYAxis
{
    protected string $yAxis;

    public function setYAxis($show = true): self
    {
        $this->yAxis = json_encode([
            'show' => $show,
        ]);

        return $this;
    }

    protected function initYAxis(): void
    {
        $this->yAxis = $this->defaultYAxis();
    }

    private function defaultYAxis(): string
    {
        return json_encode([
            'show' => true,
        ]);
    }

    public function yAxis(): bool|string
    {
        return $this->yAxis;
    }
}
