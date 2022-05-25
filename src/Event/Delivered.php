<?php

namespace Viberbot\Messages\Event;

class Delivered extends Event
{
  protected $user_id;

  public function getUserId()
  {
    return $this->user_id;
  }
}
