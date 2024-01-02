<?php

namespace Algorythms\DataStructures;

use Algorythms\DataStructures\Substructures\Leaf;

class Tree
{
    private ?Leaf $root = null;

    public function traverse(callable $callback, ...$arguments): void
    {
        $this->walk($callback, $this->root, ...$arguments);
    }

    public function walk(callable $callback, Leaf $node, ...$arguments): void
    {   
        $callback($node, ...$arguments);

        foreach ($node->children as $leaf)
            $this->walk($callback, $leaf, ...$arguments);
    }

    public function add(mixed $value, mixed $parentValue): void
    {
        $leaf = new Leaf($value);

        if (is_null($this->root))
        {
            $this->root = $leaf;
            return;
        }

        $this->traverse(function ($node, $parentValue, $leaf) {
            if ($node->value === $parentValue)
                array_push($node->children, $leaf);
        }, $parentValue, $leaf);
    }
}