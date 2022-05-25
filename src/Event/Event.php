<?php

namespace Viberbot\Messages\Event;

use Viberbot\Messages\Message\Factory;
use Viberbot\Messages\Sender;
use Viberbot\Messages\User;

class Event
{
  /**
   * Callback type
   *
   * @var string
   */
  protected $event;

  /**
   * Time of the event that triggered the callback
   *
   * @var integer
   */
  protected $timestamp;

  /**
   * Unique ID of the message
   *
   * @var integer
   */
  protected $message_token;

  /**
   * Init event from api
   */
  public function __construct($props)
  {
    foreach ($props as $prop => $value) {
      if (!property_exists(get_class($this), $prop)) {
        continue;
      }

      switch($prop){
        case 'sender':
          $this->$prop = new Sender($value);
          break;
        case 'message':
          $this->$prop = new Factory($value);
          break;
        case 'user':
          $this->$prop = new User($value);
          break;
        default:
          $this->$prop = $value;
      }
    }
  }

  /**
   * 	Callback type - which event triggered the callback
   *
   * @return string
   */
  public function getEvent(): string
  {
    return $this->event;
  }

  /**
   * Get the time when the callback was called
   *
   * @return integer
   */
  public function getTimestamp(): int
  {
    return $this->timestamp;
  }

  /**
   * Get unique ID of the message
   *
   * @return integer
   */
  public function getMessageToken(): int
  {
    return $this->message_token;
  }
}
