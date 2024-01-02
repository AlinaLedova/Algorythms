<?php

namespace Algorythms\DataStructures\Substructures;

class GraphNode
{
    public mixed $value;
    /**
     * @var GraphNode[]
     */
    public array $lines = [];

    public function __construct(mixed $value) {
        $this->value = $value;
    }

    public function addLine(GraphNode $node): void
    {
        array_push($this->lines, $node);
    }
}