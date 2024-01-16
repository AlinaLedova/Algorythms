<?php

namespace Algorythms
{
    function Autoload(string $fullClassName): bool
    {
        $parts = explode('\\', $fullClassName);
        array_shift($parts);
        $expectedFilePath = __DIR__ . '/' . implode('/', $parts) . '.php';

        if (!file_exists($expectedFilePath))
            return false;

        require_once $expectedFilePath;

        if (!class_exists($fullClassName))
            return false;

        return true;
    }

    spl_autoload_register(__NAMESPACE__ . '\Autoload');
}