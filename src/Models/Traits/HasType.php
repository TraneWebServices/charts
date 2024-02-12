<?php

namespace TWS\Charts\Models\Traits;

trait HasType
{
    protected string $type = 'donut';

    /**
     *
     * @deprecated deprecated
     * @param string $type
     * @return $this
     */
    public function setType(string $type = null): self
    {
        $this->type = $type;
        return $this;
    }

    public function type(): string
    {
        return $this->type;
    }
}
