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
            throw new Exception("The enum value " . $value . " is not supported. Valid values: " . implode(", ", $allowed));
        }

        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
