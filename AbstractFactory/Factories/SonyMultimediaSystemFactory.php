<?php

namespace AbstractFactory\Factories;

use AbstractFactory\MultimediaSystems\Sony\{SonyMonitor, SonySpeaker, SonySubwoofer};
use AbstractFactory\MultimediaSystems\{MonitorInterface, SpeakerInterface, SubwooferInterface};

/**
 * Class SonyMultimediaSystemFactory
 * @package AbstractFactory\Factories
 */
class SonyMultimediaSystemFactory implements MultimediaSystemFactoryInterface
{
    /**
     * @return MonitorInterface
     */
    public function getMonitor(): MonitorInterface
    {
        return new SonyMonitor();
    }

    /**
     * @return SpeakerInterface
     */
    public function getSpeaker(): SpeakerInterface
    {
        return new SonySpeaker();
    }

    /**
     * @return SubwooferInterface
     */
    public function getSubwoofer(): SubwooferInterface
    {
        return new SonySubwoofer();
    }
}
