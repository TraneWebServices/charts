<?php

namespace T\Charts\Models\Traits;

trait HasHorizontal
{
    protected string $horizontal;

    public function setHorizontal(bool $horizontal): self
    {
        $this->horizontal = $horizontal;
        return $this;
    }

    protected function initHorizontal(): void
    {
        $this->horizontal = $this->defaultHorizontal();
    }

    private function defaultHorizontal(): string
    {
        return false;
    }

    public function horizontal(): bool|string
    {
        return $this->horizontal;
    }
}
