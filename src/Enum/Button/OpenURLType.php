<?php

namespace Viberbot\Messages\Enum\Button;

use Viberbot\Messages\Enum;

final class OpenURLType extends Enum
{

    private const INTERNAL = 'internal';

    private const EXTERNAL = 'external';

    public static function INTERNAL(): self
    {
        return new self(self::INTERNAL);
    }

    public static function EXTERNAL(): self
    {
        return new self(self::EXTERNAL);
    }
}
