<?php

namespace Algorythms\DataStructures\Substructures;

class LinkedListNode
{
    public mixed $value;
    private ?LinkedListNode $next;

    public function __construct(mixed $value, ?LinkedListNode $node = null) 
    {
        $this->value = $value;
        $this->next = $node;
    }

    public function next(): ?LinkedListNode
    {
        return $this->next;
    }

    public function setNext(?LinkedListNode $node): void
    {
        $this->next = $node;
    }
}