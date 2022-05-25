<?php

namespace Viberbot\Messages\Event;

use Viberbot\Messages\User;

class Conversation extends Event
{
  /**
   * Conversation action
   *
   * @var string
   */
  protected $type;

  /**
   * Additional parameters added to the deep link
   *
   * @var string|null
   */
  protected $context;

  /**
   * User object
   */
  protected $user;

  /**
   * Indicated whether a user is already subscribed
   */
  protected $subscribed;

  /**
   * The specific type of conversation_started event
   *
   * open. Additional types may be added in the future
   */
  public function getType(): string
  {
    return $this->type;
  }

  /**
   * Additional parameters added to the deep link
   *
   * Any additional parameters added to the deep link used to access the conversation passed as a string.
   *
   * See deep link section
   *
   * @link https://developers.viber.com/docs/tools/deep-links/ additional information
   */
  public function getContext(): ?string
  {
    return $this->context;
  }

  /**
   * User object
   */
  public function getUser(): User
  {
    return $this->user;
  }

  /**
   * Indicated whether a user is already subscribed
   *
   * true if subscribed and false otherwise
   */
  public function getSubscribed(): bool
  {
    return $this->subscribed;
  }
}
