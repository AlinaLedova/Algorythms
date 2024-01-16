<?php

namespace Algorythms\Utility;

class FakeData
{
    public static function getSortedNumericArray(int $count = 10, int $min = 0, int $max = 100): array
    {
        $result = [];

        for ($i = 0; $i < $count; $i++)
            $result[] = \rand($min, $max);

        sort($result);

        return $result;
    }
}