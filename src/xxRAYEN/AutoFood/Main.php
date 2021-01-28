<?php

namespace xxRAYEN\LobbyProtection;

use pocketmine\plugin\{
	PluginBase,
	Plugin
};
use pocketmine\event\{
	Listener,
	player\PlayerBreakBlockEvent,
	player\PlayerPlaceBlockEvent,
	player\PlayerDropItemEvent
};
use pocketmine\command\{
	Command,
	CommandSender
};
use pocketmine\utils\Config;
use pocketmine\math\Vector3;
use pocketmine\Player;
use pocketmine\event\player\PlayerMoveEvent;

class Main extends PluginBase implements Listener{
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	
	public function AutoFood(PlayerMoveEvent $event) {
		$sender = $event->getPlayer();
		if($sender->hasPermission("auto.food")) {
			if($sender instanceof Player) {
				if($sender->getFood() != 20) {
					$sender->setFood(20);
				}
			}
		}
	}
}
