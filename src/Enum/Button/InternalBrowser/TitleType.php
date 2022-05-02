<?php

namespace Viberbot\Messages\Enum\Button\InternalBrowser;

use Viberbot\Messages\Enum;

final class FooterType extends Enum
{

    private const DEFAULT = 'default';

    private const HIDDEN = 'hidden';

    public static function DEFAULT(): self
    {
        return new self(self::DEFAULT);
    }

    public static function HIDDEN(): self
    {
        return new self(self::HIDDEN);
    }
}
