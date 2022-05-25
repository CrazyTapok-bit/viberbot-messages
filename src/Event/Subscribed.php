<?php

namespace Viberbot\Messages\Event;

class Subscribed extends Event
{
  protected $user;

  public function getUser(): User
  {
    return $this->user;
  }
}
