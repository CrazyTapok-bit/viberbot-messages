<?php

namespace Viberbot\Messages\Keyboard;

use Viberbot\Messages\Trait\Expose;

class Metadata
{

    use Expose;

    protected string $type;

    protected string $url;

    protected string $title;

    protected string $thumbnail;

    protected string $domain;

    protected int $width;

    protected int $height;

    protected string $alternativeUrl;

    protected string $alternativeText;

    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;
        return $this;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function setThumbnail(string $thumbnail): self
    {
        $this->thumbnail = $thumbnail;
        return $this;
    }

    public function setDomain(string $domain): self
    {
        $this->domain = $domain;
        return $this;
    }

    public function setWidth(int $width): self
    {
        $this->width = $width;
        return $this;
    }

    public function setHeight(int $height): self
    {
        $this->height = $height;
        return $this;
    }

    public function setAlternativeUrl(string $url): self
    {
        $this->alternativeUrl = $url;
        return $this;
    }

    public function setAlternativeText(string $text): self
    {
        $this->alternativeText = $text;
        return $this;
    }
}
