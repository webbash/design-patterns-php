<?php

namespace AbstractFactory\MultimediaSystems\LG;

use AbstractFactory\MultimediaSystems\SubwooferInterface;

/**
 * Class LGSubwoofer
 * @package AbstractFactory\MultimediaSystems\LG
 */
class LGSubwoofer implements SubwooferInterface
{
    /**
     * @return array
     */
    public function getCharacteristics(): array
    {
        return [
            'size' => '295x345x400',
            'type' => 'Фазоинверторный',
        ];
    }
}
