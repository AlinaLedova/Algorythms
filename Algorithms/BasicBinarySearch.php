<?php

namespace Algorythms\Algorithms;

use Error;

class BasicBinarySearch
{
    private int $start = 0;
    private int $end = 0;

    private array $working_array = [];

    public function __construct(array $source) 
    {
        $this->working_array = $source;
        $this->end = count($source) - 1;
    }

    public function find(int $search): int|bool
    {
        if ($this->end === 0)
            throw new Error("Array is empty.");

        $middle = $this->start + (int) floor(($this->end - $this->start) / 2);

        if ($this->end - $this->start === 1 && $search !== $this->working_array[$middle])
            return false;

        if ($search > $this->working_array[$middle])
        {
            $this->start = $middle;
            return $this->find($search);
        }
        elseif ($search < $this->working_array[$middle])
        {
            $this->end = $middle;
            return $this->find($search);
        }

        return $middle;
    }
}