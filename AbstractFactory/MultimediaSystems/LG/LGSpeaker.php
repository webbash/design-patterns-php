<?php

namespace AbstractFactory\MultimediaSystems\LG;

use AbstractFactory\MultimediaSystems\SpeakerInterface;

/**
 * Class LGSpeaker
 * @package AbstractFactory\MultimediaSystems\LG
 */
class LGSpeaker implements SpeakerInterface
{
    /**
     * @return array
     */
    public function getCharacteristics(): array
    {
        return [
            'power' => 125,
            'has_amplifier' => true,
            'made_material' => 'Дерево',
        ];
    }
}
