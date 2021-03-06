<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Command\UndoRemoteControl\CeilingFan;

/**
 * Class CeilingFan
 *
 * @package Maksi\HeadFirstDesignPattern\Command\UndoRemoteControl\CeilingFan
 */
class CeilingFan
{
    /**
     * @var string
     */
    protected $location = '';

    /**
     * @var int
     */
    protected $level;
    public const HIGH = 3;
    public const MEDIUM = 2;
    public const LOW = 1;
    public const OFF = 0;

    /**
     * CeilingFan constructor.
     *
     * @param string $location
     */
    public function __construct(string $location)
    {
        $this->location = $location;
        $this->level = self::OFF;
    }

    public function high(): void
    {
        // turns the ceiling fan on to high
        $this->level = self::HIGH;
        echo $this->location . ' ceiling fan is on high' . PHP_EOL;
    }

    public function medium(): void
    {
        // turns the ceiling fan on to medium
        $this->level = self::MEDIUM;
        echo $this->location . ' ceiling fan is on medium' . PHP_EOL;
    }

    public function low(): void
    {
        // turns the ceiling fan on to low
        $this->level = self::LOW;
        echo $this->location . ' ceiling fan is on low' . PHP_EOL;
    }

    public function off(): void
    {
        // turns the ceiling fan off
        $this->level = self::OFF;
        echo $this->location . ' ceiling fan is off' . PHP_EOL;
    }

    /**
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->level;
    }
}
