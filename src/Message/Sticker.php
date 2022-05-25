<?php

namespace Viberbot\Messages\Message;

use Viberbot\Messages\Message;

class Sticker extends Message
{

    protected string $type = Type::STICKER;

    protected int $sticker_id;

    public function setStickerId(int $id): self
    {
        $this->sticker_id = $id;
        return $this;
    }

    public function getStickerId(): ?int
    {
        return $this->sticker_id;
    }
}
