<?php

namespace Algorythms\DataStructures;

class Queue
{
    private array $list = [];
    public int $length = 0;

    public function enqueue(mixed $value): void
    {
        $this->length++;
        array_push($this->list, $value);
    }

    public function dequeue(): mixed
    {
        if ($this->length === 0) return null;

        $this->length--;
        return array_shift($this->list);
    }

    public function peek(): mixed
    {
        return $this->list[0] ?? null;
    }
}