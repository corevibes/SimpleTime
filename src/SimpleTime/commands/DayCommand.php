<?php

namespace SimpleTime\commands;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat as TF;

class DayCommand extends Command {

    public function __construct() {
        parent::__construct("day", "Set time to day", "/day", ["dia"]);
        $this->setPermission("simpletime.day");
    }

    public function execute(CommandSender $sender, string $label, array $args): void {
        if(!$sender->hasPermission("simpletime.day")) {
            $sender->sendMessage(TF::RED . "You don't have permission to use this command.");
            return;
        }

        $world = $sender->getServer()->getWorldManager()->getDefaultWorld();
        if($world !== null) {
            $world->setTime(1000);
            $sender->sendMessage(TF::GREEN . "Time set to day.");
        }else{
            $sender->sendMessage(TF::RED . "Failed to change time.");
        }
    }
}
