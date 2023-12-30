<?php

namespace Algorythms\DataStructures;

class SimpleList
{
    public int $length = 0;
    public array $memory = [];

    public function get(int $address): mixed
    {
        return $this->memory[$address];
    }

    public function push(mixed $value): void
    {
        $this->memory[$this->length] = $value;
        $this->length++;
    }

    public function pop(): mixed
    {
        if ($this->length === 0) return null;

        $last_address = $this->length - 1;
        $value = $this->memory[$last_address];
        unset($this->memory[$last_address]);
        $this->length--;

        return $value;
    }

    public function unshift(mixed $value): void
    {
        $previous = $value;

        for ($address = 0; $address < $this->length; $address++)
        {
            $current = $this->memory[$address];
            $this->memory[$address] = $previous;
            $previous = $current;
        }

        $this->memory[$this->length] = $previous;
        $this->length++;
    }

    public function shift(): mixed
    {
        if ($this->length === 0) return null;

        $value = $this->memory[0];

        for ($address = 0; $address < $this->length - 1; $address++)
        {
            $this->memory[$address] = $this->memory[$address + 1];
        }

        unset($this->memory[$this->length - 1]);
        $this->length--;

        return $value;
    }
}