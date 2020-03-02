<?php

namespace Decorator;

use Maknz\Slack\Client;
use Maknz\Slack\Message;

/**
 * Базовый компонент, в котором содержится логика по умолчанию.
 * В данном случае это логика отправки обычного текстового сообщения в Slack.
 *
 * Class PlainPost.
 */
class PlainPost implements PostInterface
{
    /**
     * @var Client
     */
    public $client;

    /**
     * @var string
     */
    public $text;

    /**
     * PlainPost constructor.
     * @param string $text
     */
    public function __construct(string $text)
    {
        $this->client = new Client('http://some-workspace.com', [
            'username' => 'Cyril',
            'channel' => '#channel',
            'link_names' => true
        ]);

        $this->text = $text;
    }

    /**
     * @return Message
     */
    public function getMessage(): Message
    {
        return (new Message($this->client))->setText($this->text);
    }

    public function send()
    {
        $this->client->sendMessage($this->getMessage());
    }
}
