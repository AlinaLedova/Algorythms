<?php

namespace Algorythms\DataStructures;

use Algorythms\DataStructures\Substructures\LinkedListNode;

class LinkedList
{
    private ?LinkedListNode $head = null;
    public int $length = 0;

    public function get(int $position): ?LinkedListNode
    {
        if ($position >= $this->length)
            throw new \Exception('Количество вершин меньше запрошенного числа.');

        $current = $this->head;

        for ($index = 0; $index < $position; $index++)
            $current = $current->next();

        return $current;
    }

    public function add(mixed $value, int $position): void
    {
        $node = new LinkedListNode($value);

        if ($position === 0)
        {
            $node->setNext($this->head);
            $this->head = $node;
        }
        else
        {
            $previousNode = $this->get($position - 1);
            $currentNode = $previousNode->next();
            $node->setNext($currentNode);
            $previousNode->setNext($node);
        }

        $this->length++;
    }

    public function remove(int $position): void
    {
        if ($position === 0)
            $this->head = $this->head->next();
        else
        {
            $previousNode = $this->get($position - 1);
            $previousNode->setNext($previousNode->next()->next());
        }
        
        $this->length--;
    }
}