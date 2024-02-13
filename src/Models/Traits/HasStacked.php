<?php

namespace T\Charts\Models\Traits;

trait HasStacked
{
    protected bool $stacked = false;

    public function setStacked(bool $stacked = true): self
    {
        $this->stacked = $stacked;
        return $this;
    }

    public function stacked(): bool
    {
        return $this->stacked;
    }
}
