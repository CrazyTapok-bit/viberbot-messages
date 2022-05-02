<?php

namespace Viberbot\Messages\Message;

use Viberbot\Messages\Message;

class Url extends Message
{

    protected string $type = Type::URL;

    protected string $media;

    public function setMedia(string $url): self
    {
        $this->media = $url;
        return $this;
    }

    public function getMedia(): ?string
    {
        return $this->media;
    }
}
