<?php

namespace LeavesGapple;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\event\block\BlockBreakEvent;

class LeavesGapple extends PluginBase {

public function onEnable(){
$this->getServer()->getLogger()->info("LeavesGapple is enabled!");

public function LeavesBreak(BlockBreakEvent $event){

    if($this->plugin->LeavesBreak($event->getPlayer())) {
return true;
    }
}
