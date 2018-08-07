<?php

namespace iPsycoh;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener{

public function onEnable(){ 
$mondi = ["pvp1","fps","hub2","sg","nodebuff"]; 
$this->getServer()->getPluginManager()->registerEvents($this,$this); 
$this->getLogger()->info("Plugin attivato con successo!"); 
foreach ($mondi as $mondo){ 
$this->getServer()->loadLevel($mondo); 
}
}
}