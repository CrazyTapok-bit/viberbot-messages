<?php

namespace Viberbot\Messages\Message;

use Viberbot\Messages\Message;
use Viberbot\Messages\Message\Model\RichMediaModel;

class RichMedia extends Message
{

    protected string $type = Type::RICH_MEDIA;

    protected RichMediaModel $rich_media;

    public function __construct()
    {
        $this->min_api_version = 7;
    }

    public function setRichMedia(RichMediaModel $richMedia): self
    {
        $this->rich_media = $richMedia;
        return $this;
    }

    public function getRichMedia(): RichMediaModel
    {
        return $this->rich_media;
    }
}
