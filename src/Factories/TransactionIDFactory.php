<?php

namespace TNM\Utils\Factories;

class TransactionIDFactory
{
    private ?string $prefix;

    public function __construct(int $length = 18, ?string $prefix = null)
    {
        $this->prefix = $prefix;
    }

    public function make(): string
    {
        return uniqid($this->prefix);
    }
}
