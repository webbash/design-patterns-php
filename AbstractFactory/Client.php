<?php

namespace AbstractFactory;

use AbstractFactory\Factories\MultimediaSystemFactoryInterface;

/**
 * Class Client
 * @package AbstractFactory
 */
class Client
{
    /**
     * @var MultimediaSystemFactoryInterface
     */
    private $factory;

    /**
     * @var MultimediaSystems\MonitorInterface
     */
    private $monitor;

    /**
     * @var MultimediaSystems\SpeakerInterface
     */
    private $speaker;

    /**
     * @var MultimediaSystems\SubwooferInterface
     */
    private $subwoofer;

    /**
     * Client constructor.
     * @param MultimediaSystemFactoryInterface $factory
     */
    public function __construct(MultimediaSystemFactoryInterface $factory)
    {
        $this->factory = $factory;

        $this->monitor = $this->factory->createMonitor();
        $this->speaker = $this->factory->createSpeaker();
        $this->subwoofer = $this->factory->createSubwoofer();
    }

    /**
     * Получить характеристики определенной мультимедиа системы.
     *
     * @return array
     */
    public function getCharacteristics()
    {
        return [
            'monitor' => $this->monitor->getCharacteristics(),
            'speaker' => $this->speaker->getCharacteristics(),
            'subwoofer' => $this->subwoofer->getCharacteristics(),
        ];
    }
}
