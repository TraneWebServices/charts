<?php

namespace T\Charts\Models\Traits;

trait HasTooltip
{
    protected string $tooltip;

    public function setTooltip(bool $show, string $theme = 'dark'): self
    {
        $this->tooltip = json_encode([
            'enabled' => $show,
            'theme' => $theme,
        ]);

        return $this;
    }

    protected function initTooltip(): void
    {
        $this->tooltip = $this->defaultTooltip();
    }

    private function defaultTooltip(): string
    {
        return json_encode([
            'enabled' => false,
            'theme' => false,
        ]);
    }

    public function tooltip(): bool|string
    {
        return $this->tooltip;
    }
}
