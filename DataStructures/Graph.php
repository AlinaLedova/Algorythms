<?php

namespace Algorythms\DataStructures;

use Algorythms\DataStructures\Substructures\Node;

class Graph
{
    /**
     * @var Node[] list of nodes
     */
    public array $nodes = [];

    public function addNode(mixed $value): void
    {
        array_push($this->nodes, new Node($value));
    }

    public function find(mixed $value): ?Node
    {
        $result = array_filter($this->nodes, function ($node) use ($value) {
            return $node->value === $value;
        });
        
        rsort($result);

        return $result[0] ?? null;
    }

    public function addLine(mixed $start_value, mixed $end_value): void
    {
        $start_node = $this->find($start_value);
        $end_node = $this->find($end_value);

        if (is_null($start_node) || is_null($end_node))
            throw new \Exception('One or both nodes doesn\'t exist.');

        $start_node->addLine($end_node);
    }
}