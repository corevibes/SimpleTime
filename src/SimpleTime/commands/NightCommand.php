<?php

namespace SimpleTime\commands;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat as TF;

class NightCommand extends Command {
    
    public function __construct() {
        parent::__construct("night", "Set time to night", "/night", ["noche"]);
        $this->setPermission("simpletime.night");
    }

    public function execute(CommandSender $sender, string $label, array $args): void {
        if(!$sender->hasPermission("simpletime.night")) {
            $sender->sendMessage(TF::RED . "You don't have permission to use this command.");
            return;
        }

        $world = $sender->getServer()->getWorldManager()->getDefaultWorld();
        if($world !== null) {
            $world->setTime(14000);
            $sender->sendMessage(TF::AQUA . "Time set to night.");
        }else{
            $sender->sendMessage(TF::RED . "Failed to change time.");
        }
    }
}
