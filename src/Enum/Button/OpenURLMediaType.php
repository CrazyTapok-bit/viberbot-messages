<?php

namespace Viberbot\Messages\Enum\Button;

use Viberbot\Messages\Enum;

final class OpenURLMediaType extends Enum
{
    private const NOT_MEDIA = 'not-media';

    private const VIDEO = 'video';

    private const GIF = 'gif';

    private const PICTURE = 'picture';

    public static function NOT_MEDIA(): self
    {
        return new self(self::NOT_MEDIA);
    }

    public static function VIDEO(): self
    {
        return new self(self::VIDEO);
    }

    public static function GIF(): self
    {
        return new self(self::GIF);
    }

    public static function PICTURE(): self
    {
        return new self(self::PICTURE);
    }
}
