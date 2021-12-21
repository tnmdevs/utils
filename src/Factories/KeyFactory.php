<?php

namespace TNM\Utils\Factories;

class KeyFactory
{
    private int $length;
    private string $characters;

    public function __construct(int $length = 32, bool $numeric = false)
    {
        $this->length = $length;
        $this->characters = $numeric ? "0123456789" : '0123456789abcdefghijkmnpqrstuvwxyz';
    }

    public function make(): string
    {
        return substr(str_shuffle(str_repeat(
            $this->characters,
            ceil($this->length / strlen($this->characters))
        )), 1, $this->length);
    }
}
