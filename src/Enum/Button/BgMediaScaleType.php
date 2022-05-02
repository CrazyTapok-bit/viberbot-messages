<?php

namespace Viberbot\Messages\Enum\Button;

use Viberbot\Messages\Enum;

final class BgMediaScaleType extends Enum
{

    private const CROP = 'crop';

    private const FILL = 'fill';

    private const FIT = 'fit';

    public static function CROP(): self
    {
        return new self(self::CROP);
    }

    public static function FILL(): self
    {
        return new self(self::FILL);
    }

    public static function FIT(): self
    {
        return new self(self::FIT);
    }
}
