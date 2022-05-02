<?php

namespace Viberbot\Messages\Message;

use Viberbot\Messages\Message;

class Video extends Message
{
    
    protected string $type = Type::VIDEO;

    protected string $media;

    protected string $thumbnail;

    protected int $size;

    protected int $duration;

    public function setMedia(string $src): self
    {
        $this->media = $src;
        return $this;
    }

    public function getMedia(): string
    {
        return $this->media;
    }

    public function setThumbnail(string $thumbnail): self
    {
        $this->thumbnail = $thumbnail;
        return $this;
    }

    public function getThumbnail(): ?string
    {
        return $this->thumbnail;
    }

    public function setSize(int $size): self
    {
        $this->size = $size;
        return $this;
    }

    public function getSize(): ?int
    {
        return $this->size;
    }

    public function setDuration(int $duration): self
    {
        $this->duration = $duration;
        return $this;
    }

    public function getDuration(): ?int
    {
        return $this->duration;
    }
}
