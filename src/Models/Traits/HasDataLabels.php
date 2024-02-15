<?php

namespace T\Charts\Models\Traits;

trait HasDataLabels
{
    protected string $dataLabels;

    public function setDataLabels(bool $enabled = true): self
    {
        $this->dataLabels = json_encode(['enabled' => $enabled]);

        return $this;
    }

    protected function initDataLabels(): void
    {
        $this->dataLabels = $this->defaultDataLabels();
    }

    private function defaultDataLabels(): string
    {
        return json_encode(['enabled' => false]);
    }

    public function dataLabels(): bool|string
    {
        return $this->dataLabels;
    }
}
