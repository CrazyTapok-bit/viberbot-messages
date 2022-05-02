<?php

namespace Viberbot\Messages\Enum\Button\InternalBrowser;

use Viberbot\Messages\Enum;

final class TitleType extends Enum
{

    private const DOMAIN = 'domain';

    private const DEFAULT = 'default';

    public static function DOMAIN(): self
    {
        return new self(self::DOMAIN);
    }

    public static function DEFAULT(): self
    {
        return new self(self::DEFAULT);
    }
}
