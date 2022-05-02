<?php

namespace Viberbot\Messages\Keyboard\Button;

use Viberbot\Messages\Enum\Button\InternalBrowser\ActionButton;
use Viberbot\Messages\Enum\Button\InternalBrowser\FooterType;
use Viberbot\Messages\Enum\Button\InternalBrowser\Mode;
use Viberbot\Messages\Enum\Button\InternalBrowser\TitleType;
use Viberbot\Messages\Trait\Expose;

class InternalBrowser
{

    use Expose;

    protected string $ActionButton;

    protected string $ActionPredefinedURL;

    protected string $TitleType;

    protected string $CustomTitle;

    protected string $Mode;

    protected string $FooterType;

    protected string $ActionReplyData;

    public function setActionButton(ActionButton $action): self
    {
        $this->ActionButton = $action->getValue();
        return $this;
    }

    public function setActionPredefinedURL(string $string): self
    {
        $this->ActionPredefinedURL = $string;
        return $this;
    }

    public function setTitleType(TitleType $type): self
    {
        $this->TitleType = $type->getValue();
        return $this;
    }

    public function setCustomTitle(string $title): self
    {
        $this->CustomTitle = $title;
        return $this;
    }

    public function setMode(Mode $mode): self
    {
        $this->Mode = $mode->getValue();
        return $this;
    }

    public function setFooterType(FooterType $type): self
    {
        $this->FooterType = $type->getValue();
        return $this;
    }

    public function setActionReplyData(string $data): self
    {
        $this->ActionReplyData = $data;
        return $this;
    }
}
