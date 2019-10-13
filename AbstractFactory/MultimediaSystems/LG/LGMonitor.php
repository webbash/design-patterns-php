<?php

namespace AbstractFactory\MultimediaSystems\LG;

use AbstractFactory\MultimediaSystems\MonitorInterface;

/**
 * Class LGMonitor
 * @package AbstractFactory\MultimediaSystems\LG
 */
class LGMonitor implements MonitorInterface
{
    /**
     * @return array
     */
    public function getCharacteristics(): array
    {
        return [
            'screen_type' => 'IPS',
            'screen_resolution' => '2560x1440',
        ];
    }
}
