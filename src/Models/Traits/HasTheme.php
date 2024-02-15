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

    protected function initTheme(): void
    {
        $this->theme = $this->defaultTheme();
    }

    private function defaultTheme(): string
    {
        return 'light';
    }

    public function theme(): string
    {
        return $this->theme;
    }
}
