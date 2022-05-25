<?php

namespace Viberbot\Messages\Event;

class Type
{
    const CONVERSATION = 'conversation_started';
    const SUBSCRIBED = 'subscribed';
    const UNSUBSCRIBED = 'unsubscribed';
    const MESSAGE = 'message';
    const DELIVERED = 'delivered';
    const SEEN = 'seen';
    const FAILED = 'failed';
    const WEBHOOK = 'webhook';
}
