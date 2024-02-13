<?php

namespace T\Charts\Contracts;

interface AddsComplexDatas
{
    public function addData(string $name, array $data): mixed;
}
