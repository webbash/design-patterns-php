<?php

namespace Decorator;

use Maknz\Slack\Message;

interface PostInterface
{
    /**
     * @return bool
     */
    public function send();

    /**
     * @return Message
     */
    public function getMessage(): Message;
}
