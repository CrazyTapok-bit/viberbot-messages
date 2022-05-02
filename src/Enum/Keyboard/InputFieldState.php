<?php

namespace Viberbot\Messages\Enum\Keyboard;

use Viberbot\Messages\Enum;

final class InputFieldState extends Enum
{

    private const REGULAR = 'regular';

    private const MINIMIZED = 'minimized';

    private const HIDDEN = 'hidden';

    public static function REGULAR(): self
    {
        return new self(self::REGULAR);
    }

    public static function MINIMIZED(): self
    {
        return new self(self::MINIMIZED);
    }

    public static function HIDDEN(): self
    {
        return new self(self::HIDDEN);
    }
}
