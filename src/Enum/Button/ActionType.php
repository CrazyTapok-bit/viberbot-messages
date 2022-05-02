<?php

namespace Viberbot\Messages\Enum\Button;

use Viberbot\Messages\Enum;

final class ActionType extends Enum
{

    private const REPLY = 'reply';

    private const OPEN_URL = 'open-url';

    private const LOCATION_PICKER = 'location-picker';

    private const SHARE_PHONE = 'share-phone';

    private const NONE = 'none';

    public static function REPLY(): self
    {
        return new self(self::REPLY);
    }

    public static function OPEN_URL(): self
    {
        return new self(self::OPEN_URL);
    }

    public static function LOCATION_PICKER(): self
    {
        return new self(self::LOCATION_PICKER);
    }

    public static function SHARE_PHONE(): self
    {
        return new self(self::SHARE_PHONE);
    }

    public static function NONE(): self
    {
        return new self(self::NONE);
    }
}
