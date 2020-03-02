<?php

namespace AbstractFactory\Factories;

use AbstractFactory\MultimediaSystems\{MonitorInterface, SpeakerInterface, SubwooferInterface};

/**
 * Interface MultimediaSystemFactoryInterface
 * @package AbstractFactory
 */
interface MultimediaSystemFactoryInterface
{
    /**
     * @return MonitorInterface
     */
    public function getMonitor(): MonitorInterface;

    /**
     * @return SpeakerInterface
     */
    public function getSpeaker(): SpeakerInterface;

    /**
     * @return SubwooferInterface
     */
    public function getSubwoofer(): SubwooferInterface;
}
