<?php

namespace Algorythms\DataStructures;

use Algorythms\DataStructures\Substructures\BinarySearchLeaf;

class BinarySearchTree
{
    public ?BinarySearchLeaf $root = null;

    public function contains(mixed $value): bool
    {
        $current = $this->root;

        while (!is_null($current->value))
        {
            if ($value > $current->value)
                $current = $current->right;
            elseif ($value < $current->value)
                $current = $current->left;
            else
                return true;
        }

        return false;
    }

    public function add(mixed $value): void
    {
        $leaf = new BinarySearchLeaf($value);

        if (is_null($this->root))
        {
            $this->root = $leaf;
            return;
        }

        $current = $this->root;

        while (true)
        {
            if ($value > $current->value)
            {
                if (is_null($current->right))
                {
                    $current->right = $leaf;
                    break;
                }

                $current = $current->right;
            }
            elseif ($value < $current->value)
            {
                if (is_null($current->left))
                {
                    $current->left = $leaf;
                    break;
                }

                $current = $current->left;
            }
            else
                break;
        }
    }
}