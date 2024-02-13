<?php

namespace T\Charts\Models\Traits;

trait HasHeight
{
    protected int $height = 500;

    public function setHeight(int $height): self
    {
        $this->height = $height;
        return $this;
    }

    public function height() :int
    {
        return $this->height;
    }
}
