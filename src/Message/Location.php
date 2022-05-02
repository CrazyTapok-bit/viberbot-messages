<?php

namespace Viberbot\Messages\Message;

use Viberbot\Messages\Message;
use Viberbot\Messages\Message\Model\LocationModel;

class Location extends Message
{
    
    protected string $type = Type::LOCATION;

    protected LocationModel $location;

    public function setLocation(LocationModel $location): self
    {
        $this->location = $location;
        return $this;
    }

    public function getLocation(): LocationModel
    {
        return $this->location;
    }
}
