<?php

require_once '../vendor/autoload.php';

use AbstractFactory\Client;
use AbstractFactory\Factories\LGMultimediaSystemFactory;
use AbstractFactory\Factories\SonyMultimediaSystemFactory;

/**
 * Создаем мультимедиа разных компаний (LG, Sony и.т.д.)
 */
$lgMultimediaSystem = new LGMultimediaSystemFactory();
$sonyMultimediaSystem = new SonyMultimediaSystemFactory();

/**
 * Получаем характеристики каждого устройства в мультимедиа системе
 */
$lgCharacteristics = (new Client($lgMultimediaSystem))->getCharacteristics();
$sonyCharacteristics = (new Client($sonyMultimediaSystem))->getCharacteristics();

/**
 * Выводим характеристики для каждой компании, для сравнения
 */
var_dump([
    'LG' => $lgCharacteristics,
    'Sony' => $sonyCharacteristics,
]);
