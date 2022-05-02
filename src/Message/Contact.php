<?php

namespace Viberbot\Messages\Message;

use Viberbot\Messages\Message;
use Viberbot\Messages\Message\Model\ContactModel;

class Contact extends Message
{

    protected string $type = Type::CONTACT;

    protected ContactModel $contact;

    public function setContact(ContactModel $contact): self
    {
        $this->contact = $contact;
        return $this;
    }

    public function getContact(): ContactModel
    {
        return $this->contact;
    }
}
