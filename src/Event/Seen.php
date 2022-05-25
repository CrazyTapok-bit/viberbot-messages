<?php

namespace Viberbot\Messages\Event;

class Seen extends Event
{
  protected $user_id;

  public function getUserId()
  {
    return $this->user_id;
  }
}
