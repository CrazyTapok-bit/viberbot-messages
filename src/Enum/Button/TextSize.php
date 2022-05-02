<?php

namespace Viberbot\Messages\Enum\Button;

use Viberbot\Messages\Enum;

final class TextSize extends Enum
{
    private const SMALL = 'small';

    private const REGULAR = 'regular';

    private const LARGE = 'large';

    public static function SMALL(): self
    {
        return new self(self::SMALL);
    }

    public static function REGULAR(): self
    {
        return new self(self::REGULAR);
    }

    public static function LARGE(): self
    {
        return new self(self::LARGE);
    }
}
