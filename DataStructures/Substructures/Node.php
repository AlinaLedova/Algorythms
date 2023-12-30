<?php

namespace Algorythms\DataStructures\Substructures;

class Node
{
    public mixed $value;
    /**
     * @var Node[]
     */
    public array $lines = [];

    public function __construct(mixed $value) {
        $this->value = $value;
    }

    public function addLine(Node $node): void
    {
        array_push($this->lines, $node);
    }
}