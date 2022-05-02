<?php

namespace Viberbot\Messages\Enum\Button\InternalBrowser;

use Viberbot\Messages\Enum;

final class ActionButton extends Enum
{

    private const FORWARD = 'forward';

    private const SEND = 'send';

    private const OPEN_EXTERNALLY = 'open-externally';

    private const SEND_TO_BOT = 'send-to-bot';

    private const NONE = 'none';

    public static function FORWARD(): self
    {
        return new self(self::FORWARD);
    }

    public static function SEND(): self
    {
        return new self(self::SEND);
    }

    public static function OPEN_EXTERNALLY(): self
    {
        return new self(self::OPEN_EXTERNALLY);
    }

    public static function SEND_TO_BOT(): self
    {
        return new self(self::SEND_TO_BOT);
    }

    public static function NONE(): self
    {
        return new self(self::NONE);
    }
}
