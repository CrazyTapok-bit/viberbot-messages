<?php

namespace Viberbot\Messages\Enum\Button;

use Viberbot\Messages\Enum;

final class TextHAlign extends Enum
{

    private const LEFT = 'left';

    private const CENTER = 'center';

    private const RIGHT = 'right';

    public static function LEFT(): self
    {
        return new self(self::LEFT);
    }

    public static function CENTER(): self
    {
        return new self(self::CENTER);
    }

    public static function RIGHT(): self
    {
        return new self(self::RIGHT);
    }
}
