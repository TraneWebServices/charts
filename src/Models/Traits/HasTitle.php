<?php

namespace TWS\Charts\Models\Traits;

trait HasTitle
{
    protected string $title = '';

    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function title(): string
    {
        return $this->title;
    }
}
