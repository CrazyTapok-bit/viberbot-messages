<?php

namespace Viberbot\Messages\Event;

use Viberbot\Messages\Message\Model\SenderModel;

class Message extends Event
{
    protected $sender;

    protected $message;

    public function getSender(): SenderModel
    {
      return $this->sender;
    }

    public function getMessage()
    {
      return $this->message;
    }
}
