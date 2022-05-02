<?php

namespace Viberbot\Messages\Enum\Button;

use Viberbot\Messages\Enum;

final class ActionBody extends Enum
{

    private const REPLY = 'reply';

    private const NONE = 'none';

    private const OPEN_URL = 'open-url';

    public static function REPLY(): self
    {
        return new self(self::REPLY);
    }

    public static function OPEN_URL(): self
    {
        return new self(self::OPEN_URL);
    }

    public static function NONE(): self
    {
        return new self(self::NONE);
    }
}
