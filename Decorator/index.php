<?php

require_once '../vendor/autoload.php';

use Decorator\PlainPost;
use Decorator\Decorators\AttachmentPost;
use Decorator\Decorators\WithIconPost;

/**
 * В данном примере мы будем отправлять сообщения в Slack.
 *
 * Декоратор может быть использован как обертка для обычного сообщения.
 * У нас есть три вида сообщения в Slack: Обычное, с другой иконкой, с примечанием
 * Базовый компонент является обычным сообщением, которое отправляется без дополнительных параметров.
 * С помощью паттерна мы можем добавить к сообщению иконку, либо примечание
 * и отправить совершенно другое сообщение.
 */

$plainPost = new PlainPost('Some text');

// Можем отправить как базовое сообщение
$plainPost->send();

// Либо можем отправить сообщение с иконкой
$postWithIcon = new WithIconPost($plainPost);
$postWithIcon->send();

// Либо можем отправить сообщение с примечанием
$attachmentPost = new AttachmentPost($plainPost);
$attachmentPost->send();
