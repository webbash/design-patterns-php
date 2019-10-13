<?php

namespace AbstractFactory\MultimediaSystems\Sony;

use AbstractFactory\MultimediaSystems\SubwooferInterface;

/**
 * Class SonySubwoofer
 * @package AbstractFactory\MultimediaSystems\Sony
 */
class SonySubwoofer implements SubwooferInterface
{
    /**
     * @return array
     */
    public function getCharacteristics(): array
    {
        return [
            'size' => '320x400x360',
            'type' => 'Фазоинверторный',
        ];
    }
}
