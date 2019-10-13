<?php

namespace AbstractFactory\MultimediaSystems\Sony;

use AbstractFactory\MultimediaSystems\SpeakerInterface;

/**
 * Class SonySpeaker
 * @package AbstractFactory\MultimediaSystems\Sony
 */
class SonySpeaker implements SpeakerInterface
{
    /**
     * @return array
     */
    public function getCharacteristics(): array
    {
        return [
            'power' => 150,
            'has_amplifier' => false,
            'made_material' => 'Пластик',
        ];
    }
}
