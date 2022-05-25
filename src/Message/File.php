<?php

namespace Viberbot\Messages\Message;

use Viberbot\Messages\Message;

class File extends Message
{

    protected string $type = Type::FILE;

    protected string $media;

    protected int $size;

    protected string $file_name;

    public function setMedia(string $src): self
    {
        $this->media = $src;
        return $this;
    }

    public function getMedia(): ?string
    {
        return $this->media;
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

    public function setFileName(string $fileName): self
    {
        $this->file_name = $fileName;
        return $this;
    }

    public function getFileName(): ?string
    {
        return $this->file_name;
    }
}
