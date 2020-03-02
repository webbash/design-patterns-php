<?php

namespace Decorator\Decorators;

use Decorator\PostDecorator;
use Decorator\PostInterface;
use Maknz\Slack\Message;

/**
 * Пост с другой иконкой
 * https://goo.gl/lff21l
 *
 * Class WithIconPost.
 */
class WithIconPost extends PostDecorator implements PostInterface
{
    /**
     * @return Message
     */
    public function getMessage(): Message
    {
        return (new Message($this->post->client))
            ->setText($this->post->text)
            ->withIcon('some-icon');
    }
}
