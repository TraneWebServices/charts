<?php

namespace TWS\Charts\Models\Traits;

trait HasColors
{
    protected string $colors;

    public function setColors(array $colors): self
    {
        $this->colors = json_encode($colors);
        return $this;
    }

    protected function initColors(): void
    {
        $this->colors = $this->defaultColors();
    }

    private function defaultColors(): string
    {
        return json_encode(config('charts.colors'));
    }

    public function colors(): bool|string
    {
        return $this->colors;
    }
}
