<?php

namespace T\Charts\Models\Traits;

trait HasWidth
{
    protected int|string $width = '100%';

    public function setWidth(int $width): self
    {
        $this->width = $width;
        return $this;
    }

    public function width() :string
    {
        return $this->width;
    }
}
