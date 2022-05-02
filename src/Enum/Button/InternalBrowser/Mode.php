<?php

namespace Viberbot\Messages\Enum\Button\InternalBrowser;

use Viberbot\Messages\Enum;

final class Mode extends Enum
{

    private const FULLSCREEN = 'fullscreen';

    private const FULLSCREEN_PORTRAIT = 'fullscreen-portrait';

    private const FULLSCREEN_LANDSCAPE = 'fullscreen-landscape';

    private const PARTIAL_SIZE = 'partial-size';

    public static function FULLSCREEN(): self
    {
        return new self(self::FULLSCREEN);
    }

    public static function FULLSCREEN_PORTRAIT(): self
    {
        return new self(self::FULLSCREEN_PORTRAIT);
    }

    public static function FULLSCREEN_LANDSCAPE(): self
    {
        return new self(self::FULLSCREEN_LANDSCAPE);
    }

    public static function PARTIAL_SIZE(): self
    {
        return new self(self::PARTIAL_SIZE);
    }
}
