<?php

namespace TWS\Charts\Models\Traits;

trait HasToolBar
{
    protected string $toolbar;

    public function setToolbar(bool $show, bool $zoom = true): self
    {
        $this->toolbar = json_encode(['show' => $show]);
        $this->zoom = json_encode(['enabled' => $zoom ? $zoom : false]);
        return $this;
    }

    protected function initToolBar(): void
    {
        $this->toolbar = $this->defaultToolBar();
    }

    private function defaultToolBar(): string
    {
        return json_encode(['show' => true]);
    }

    public function toolbar(): bool|string
    {
        return $this->toolbar;
    }
}
