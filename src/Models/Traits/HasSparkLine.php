<?php

namespace T\Charts\Models\Traits;

trait HasSparkLine
{
    protected string $sparkline;

    public function setSparkline(bool $enabled = true): self
    {
        $this->sparkline = json_encode(['enabled' => $enabled]);
        return $this;
    }

    protected function initSparkline(): void
    {
        $this->sparkline = $this->defaultSparkline();
    }

    private function defaultSparkline(): string
    {
        return json_encode(['enabled' => false]);
    }

    public function sparkline(): bool|string
    {
        return $this->sparkline;
    }
}
