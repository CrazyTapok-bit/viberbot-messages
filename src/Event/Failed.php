<?php

namespace Viberbot\Messages\Event;

class Failed extends Event
{
  protected $user_id;

  protected $desc;

  public function getUserId()
  {
    return $this->user_id;
  }

  public function getDesc()
  {
    return $this->desc;
  }
}
