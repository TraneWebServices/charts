<?php

namespace TWS\Charts\Models\Traits;

trait HasJsonConfig
{
    private $jsonConfig;

    public function setJsonConfig($jsonConfig): self
    {
        $this->horizontal = json_encode(['jsonConfig' => $jsonConfig]);
        return $this;
    }

    protected function initJsonConfig(): void
    {
        $this->jsonConfig = [];
    }

    private function defaultJsonConfig(): string
    {
        return json_encode([]);
    }

    public function jsonConfig(): array
    {
        return $this->jsonConfig;
    }
}
