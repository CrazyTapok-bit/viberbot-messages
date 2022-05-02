<?php

namespace Viberbot\Messages\Message;

use Viberbot\Messages\Message;

class Picture extends Message
{

    protected string $text;

    protected string $type = Type::PICTURE;

    protected string $media;

    protected string $thumbnail;

    public function setText(string $text): self
    {
        $this->text = $text;
        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setMedia(string $src): self
    {
        $this->media = $src;
        return $this;
    }

    public function getMedia(): ?string
    {
        return $this->media;
    }

    public function setThumbnail(string $src): self
    {
        $this->thumbnail = $src;
        return $this;
    }

    public function getThumbnail(): ?string
    {
        return $this->thumbnail;
    }
}
