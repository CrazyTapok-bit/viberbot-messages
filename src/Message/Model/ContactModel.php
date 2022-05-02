<?php

namespace Viberbot\Messages\Message\Model;

use Viberbot\Messages\Trait\Expose;

class ContactModel
{
    
    use Expose;

    protected string $name;

    protected string $phone_number;

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setPhoneNumber(string $number): self
    {
        $this->phone_number = $number;
        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phone_number;
    }
}
