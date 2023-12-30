<?php

namespace Algorythms\DataStructures;

class Stack
{
    private array $list = [];
    public int $length = 0;

    public function push(mixed $value): void
    {
        $this->length++;
        array_push($this->list, $value);
    }

    public function pop(): mixed
    {
        if ($this->length === 0) return null;
        
        $this->length--;
        return array_pop($this->list);
    }

    public function peek(): mixed
    {
        return $this->list[$this->length - 1] ?? null;
    }
}