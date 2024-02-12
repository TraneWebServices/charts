<?php

namespace TWS\Charts\Models\Traits;

trait HasFontFamily
{
    protected string $fontFamily;

    public function setFontFamily(string $fontFamily): self
	{
		$this->fontFamily = $fontFamily;
		return $this;
	}

    protected function initFontFamily(): void
    {
        $this->fontFamily = $this->defaultFontFamily();
    }

    private function defaultFontFamily(): string
    {
        return json_encode(config('charts.font_family'));
    }

	public function fontFamily(): string
    {
		return $this->fontFamily;
	}
}
