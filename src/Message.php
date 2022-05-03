<?php

namespace Viberbot\Messages;

use Viberbot\Messages\Message\Model\KeyboardModel;
use Viberbot\Messages\Message\Model\SenderModel;
use Viberbot\Messages\Trait\Expose;

class Message
{

    use Expose;

    protected string $auth_token;

    protected string $receiver;

    protected string $tracking_data;

    protected int $min_api_version = 1;

    protected SenderModel $sender;

    protected array $broadcast_list;

    protected KeyboardModel $keyboard;

    public function setAuthToken(string $token)
    {
        $this->auth_token = $token;
        return $this;
    }

    public function getAuthToken(): ?string
    {
        return $this->auth_token;
    }

    public function getReceiver(): ?string
    {
        return $this->receiver;
    }

    public function setReceiver(string $receiver)
    {
        $this->receiver = $receiver;
        return $this;
    }

    public function getTrackingData(): ?string
    {
        return $this->tracking_data;
    }

    public function setTrackingData(string $tracking_data)
    {
        $this->tracking_data = $tracking_data;
        return $this;
    }

    public function setMinApiVersion(int $version = 1)
    {
        $this->min_api_version = $version;
        return $this;
    }

    public function getMinApiVersion(): ?int
    {
        return $this->min_api_version;
    }

    public function setSender(SenderModel $sender)
    {
        $this->sender = $sender;
        return $this;
    }

    public function getSender(): ?SenderModel
    {
        return $this->sender;
    }

    public function setBroadcastList(array $ids)
    {
        $this->broadcast_list = $ids;
        return $this;
    }

    public function setKeyboard(KeyboardModel $keyboard): self
    {
        $this->keyboard = $keyboard;
        return $this;
    }
}
