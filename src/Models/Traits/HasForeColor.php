<?php

namespace T\Charts\Models\Traits;

trait HasForeColor
{
    protected string $foreColor;

    public function setFontColor(string $fontColor): self
    {
        $this->foreColor = $fontColor;
        return $this;
    }

    protected function initForeColor(): void
    {
        $this->foreColor = $this->defaultForeColor();
    }

    private function defaultForeColor(): string
    {
        return json_encode(config('charts.font_color'));
    }

    public function foreColor(): string
    {
        return $this->foreColor;
    }
}
