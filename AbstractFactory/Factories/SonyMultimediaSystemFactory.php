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
    public function createMonitor(): MonitorInterface
    {
        return new SonyMonitor();
    }

    /**
     * @return SpeakerInterface
     */
    public function createSpeaker(): SpeakerInterface
    {
        return new SonySpeaker();
    }

    /**
     * @return SubwooferInterface
     */
    public function createSubwoofer(): SubwooferInterface
    {
        return new SonySubwoofer();
    }
}
