<?php

namespace Viberbot\Messages\Keyboard\Button;

use Viberbot\Messages\Trait\Expose;

class MediaPlayer
{

    use Expose;

    protected string $Title;

    protected string $Subtitle;

    protected string $ThumbnailURL;

    protected bool $Loop;

    public function setTitle(string $title): self
    {
        $this->Title = $title;
        return $this;
    }

    public function setSubtitle(string $subtitle): self
    {
        $this->Subtitle = $subtitle;
        return $this;
    }

    public function setThumbnailURL(string $url): self
    {
        $this->ThumbnailURL = $url;
        return $this;
    }

    public function setLoop(bool $loop): self
    {
        $this->Loop = $loop;
        return $this;
    }
}
