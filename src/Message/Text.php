<?php

namespace Viberbot\Messages\Message;

use Viberbot\Messages\Message;

class Text extends Message
{

    protected string $text;

    protected string $type = Type::TEXT;

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;
        return $this;
    }
}
