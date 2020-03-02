<?php

namespace Decorator;

use Maknz\Slack\Message;

/**
 * Абстрактный класс декоратора.
 *
 * Class PostDecorator.
 */
class PostDecorator implements PostInterface
{
    /**
     * @var PlainPost
     */
    protected $post;

    /**
     * PostDecorator constructor.
     * @param PlainPost $post
     */
    public function __construct(PlainPost $post)
    {
        $this->post = $post;
    }

    /**
     * Логика отправки остается в базовом классе декоратора
     * Которую можно изменить в дочерних классах.
     *
     * @return void
     */
    public function send()
    {
        $this->post->send();
    }

    /**
     * Логика формирования сообщения также остается в базовом классе декоратора
     * Которую мы и будем изменять в дочерних классах в данном примере.
     *
     * @return Message
     */
    public function getMessage(): Message
    {
        return $this->post->getMessage();
    }
}
