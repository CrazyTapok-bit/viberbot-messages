<?php

namespace Viberbot\Messages\Event;

class Unsubscribed extends Event
{
  protected $user_id;

  public function getUserId()
  {
    return $this->user_id;
  }
}
