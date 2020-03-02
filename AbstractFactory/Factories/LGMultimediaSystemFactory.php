<?php

namespace AbstractFactory\Factories;

use AbstractFactory\MultimediaSystems\LG\{LGMonitor, LGSpeaker, LGSubwoofer};
use AbstractFactory\MultimediaSystems\{MonitorInterface, SpeakerInterface, SubwooferInterface};

/**
 * Class LGMultimediaSystemFactory
 * @package AbstractFactory\Factories
 */
class LGMultimediaSystemFactory implements MultimediaSystemFactoryInterface
{
    /**
     * @return MonitorInterface
     */
    public function getMonitor(): MonitorInterface
    {
        return new LGMonitor();
    }

    /**
     * @return SpeakerInterface
     */
    public function getSpeaker(): SpeakerInterface
    {
        return new LGSpeaker();
    }

    /**
     * @return SubwooferInterface
     */
    public function getSubwoofer(): SubwooferInterface
    {
        return new LGSubwoofer();
    }
}
