<?php

namespace Algorythms\DataStructures;

class HashTable
{
    public array $memory = [];

    public function get(string $key): mixed
    {
        $address = self::hashKey($key);
        return $this->memory[$address];
    }

    public function set(string $key, mixed $value): void
    {
        $address = self::hashKey($key);
        $this->memory[$address] = $value;
    }

    public function remove(string $key): void
    {
        $address = self::hashKey($key);
        if (isset($this->memory[$address]))
            unset($this->memory[$address]);
    }

    public static function hashKey(string $value): int
    {
        $hash = 0;

        $chars = mb_str_split($value);

        for ($i = 0; $i < count($chars); $i++)
        {
            $code = mb_ord($chars[$i]);
            $hash = (($hash << 5) - $hash) + $code ?? 0;
        }

        return $hash;
    }
}