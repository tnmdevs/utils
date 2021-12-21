<?php

namespace TNM\Utils\Factories;

class KeyFactory
{
    private int $length;
    private bool $numeric;

    public function __construct(int $length = 32, bool $numeric = false)
    {
        $this->length = $length;
        $this->numeric = $numeric;
    }

    public function make(): string
    {
        $characters = $this->numeric ? "0123456789" : '0123456789abcdefghijkmnpqrstuvwxyz';

        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $this->length; $i++)
            $randomString .= $characters[rand(0, $charactersLength - 1)];

        return $randomString;
    }
}
