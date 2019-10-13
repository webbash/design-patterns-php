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
    public function createMonitor(): MonitorInterface;

    /**
     * @return SpeakerInterface
     */
    public function createSpeaker(): SpeakerInterface;

    /**
     * @return SubwooferInterface
     */
    public function createSubwoofer(): SubwooferInterface;
}
