<?php


namespace Decorator\Decorators;

use Decorator\PostDecorator;
use Decorator\PostInterface;
use Maknz\Slack\Message;

/**
 * Пост с информационным сообщение в конце
 * https://goo.gl/fp3iaY
 *
 * Class AttachmentPost.
 */
class AttachmentPost extends PostDecorator implements PostInterface
{
    /**
     * @return Message
     */
    public function getMessage(): Message
    {
        return (new Message($this->post->client))
            ->setText($this->post->text)
            ->attach([
                'text' => 'Some highlighted message',
                'color' => 'danger',
            ]);
    }
}
