<?php

namespace Viberbot\Messages\Message\Model;

use Viberbot\Messages\Trait\Expose;

class SenderModel
{

    use Expose;

    protected string $name;

    protected string $avatar;

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setAvatar(string $avatar): self
    {
        $this->avatar = $avatar;
        return $this;
    }

    public function getAvatar(): ?string
    {
        return $this->avatar;
    }
}
