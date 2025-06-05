<?php

namespace SimpleTime;

use pocketmine\plugin\PluginBase;
use SimpleTime\commands\DayCommand;
use SimpleTime\commands\NightCommand;

class SimpleTime extends PluginBase {

    protected function onEnable(): void {
        $this->getServer()->getCommandMap()->registerAll("simpletime", [
            new DayCommand(),
            new NightCommand()
        ]);
    }
}
