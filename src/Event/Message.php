<?php

namespace Viberbot\Messages\Event;

use Viberbot\Messages\Sender;

class Message extends Event
{
    protected $sender;

    protected $message;

    public function getSender(): Sender
    {
      return $this->sender;
    }

    public function getMessage()
    {
      return $this->message;
    }
}
