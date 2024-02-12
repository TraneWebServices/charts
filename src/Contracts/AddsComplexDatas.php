<?php

namespace TWS\Charts\Contracts;

interface AddsComplexDatas
{
    public function addData(string $name, array $data): mixed;
}
