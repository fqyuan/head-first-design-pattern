<?php
declare(strict_types = 1);

namespace Maksi\HeadFirstDesignPattern\Command\Party\Light;

use Maksi\HeadFirstDesignPattern\Command\Party\Command;

/**
 * Class LightOnCommand
 *
 * @package Maksi\HeadFirstDesignPattern\Command\RemoteControl\Light
 */
class LightOnCommand implements Command
{
    /**
     * @var Light
     */
    protected $light;

    /**
     * LightOnCommand constructor.
     *
     * @param Light $light
     */
    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute(): void
    {
        $this->light->on();
    }

    public function undo(): void
    {
       $this->light->off();
    }
}
