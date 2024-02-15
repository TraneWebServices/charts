<?php

namespace T\Charts\Models\Traits;

trait HasDistributed
{
    protected string $distributed;

    public function setDistributed(bool $distributed): self
    {
        $this->distributed = $distributed;

        return $this;
    }

    protected function initDistributed(): void
    {
        $this->distributed = $this->defaultDistributed();
    }

    private function defaultDistributed():bool
    {
        return false;
    }

    public function distributed(): bool|string
    {
        return $this->distributed;
    }
}
