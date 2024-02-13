<?php

namespace T\Charts\Models\Traits;

trait HasZoom
{
    protected string $zoom;

    public function setZoom(string $zoom): self
    {
        $this->zoom = json_encode($zoom);
        return $this;
    }

    protected function initZoom(): void
    {
        $this->zoom = $this->defaultZoom();
    }

    private function defaultZoom(): string
    {
        return json_encode(['enabled' => true]);
    }

    public function zoom(): bool|string
    {
        return $this->zoom;
    }
}
