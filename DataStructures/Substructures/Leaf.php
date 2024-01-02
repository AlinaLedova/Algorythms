<?php

namespace Algorythms\DataStructures\Substructures;

class Leaf
{
    public mixed $value;
    /**
     * @var Leaf[]
     */
    public array $children = [];

    public function __construct(mixed $value = null) {
        $this->value = $value;
    }
}