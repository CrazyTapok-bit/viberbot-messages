<?php

namespace Viberbot\Messages\Enum\Keyboard\FavoritesMetadata;

use Viberbot\Messages\Enum;

final class Type extends Enum
{

    private const GIF = 'gif';

    private const LINK = 'link';

    private const VIDEO = 'video';

    public static function GIF(): self
    {
        return new self(self::GIF);
    }

    public static function LINK(): self
    {
        return new self(self::LINK);
    }

    public static function VIDEO(): self
    {
        return new self(self::VIDEO);
    }
}
