<?php

namespace Viberbot\Messages;

use Exception;
use ReflectionClass;

class Enum
{
    private string $value;

    protected function __construct(string $value)
    {
        $reflectionClass = new ReflectionClass(static::class);
        $constants = $reflectionClass->getConstants();
        $allowed = array_values($constants);

        if (!in_array($value, $allowed, true)) {
            throw new Exception('Unsupported enum value');
        }

        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
