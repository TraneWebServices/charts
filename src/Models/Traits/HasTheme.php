<?php

namespace T\Charts\Models\Traits;

trait HasTheme
{
    protected string $theme = '';

    public function setTheme(string $theme): self
    {
        $this->theme = $theme;
        return $this;
    }

    public function theme(): string
    {
        return $this->theme;
    }
}
