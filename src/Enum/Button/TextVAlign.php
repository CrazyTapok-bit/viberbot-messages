<?php

namespace Viberbot\Messages\Enum\Button;

use Viberbot\Messages\Enum;

final class TextVAlign extends Enum
{

    private const TOP = 'top';

    private const MIDDLE = 'middle';

    private const BOTTOM = 'bottom';

    public static function TOP(): self
    {
        return new self(self::TOP);
    }

    public static function MIDDLE(): self
    {
        return new self(self::MIDDLE);
    }

    public static function BOTTOM(): self
    {
        return new self(self::BOTTOM);
    }
}
