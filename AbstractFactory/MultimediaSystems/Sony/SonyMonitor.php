<?php

namespace AbstractFactory\MultimediaSystems\Sony;

use AbstractFactory\MultimediaSystems\MonitorInterface;

/**
 * Class SonyMonitor
 * @package AbstractFactory\MultimediaSystems\Sony
 */
class SonyMonitor implements MonitorInterface
{
    /**
     * @return array
     */
    public function getCharacteristics(): array
    {
        return [
            'screen_type' => 'AMOLED',
            'screen_resolution' => '1920x1080',
        ];
    }
}
