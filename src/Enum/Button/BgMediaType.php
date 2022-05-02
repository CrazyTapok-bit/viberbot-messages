<?php

namespace Viberbot\Messages\Enum\Button;

use Viberbot\Messages\Enum;

final class BgMediaType extends Enum
{

    private const PICTURE = 'picture';

    private const GIF = 'gif';

    public static function PICTURE(): self
    {
        return new self(self::PICTURE);
    }

    public static function GIF(): self
    {
        return new self(self::GIF);
    }
}
