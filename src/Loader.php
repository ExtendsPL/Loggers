<?php

namespace Loggers;

use pocketmine\event\Listener;

use pocketmine\plugin\PluginBase;

use pocketmine\utils\Config;

use pocketmine\event\player\PlayerJoinEvent;

class Loader extends PluginBase implements Listener{
	
	public function onEnable(){
		
		$this->getServer()->getPluginManager()->registerEvebts($this,$this);
		
		}
 
   public function onLoad(){
   	  if(!is_file($this->getDataFolder())){
   	  	 @mkdir($this->getDataFolder(), 0777, true);
   	  	  $this->archive = new Config($this->getDataFolder(). "Loggers.json", Config::JSON, ARRay());
   	  	  }
   	  	}
   	  	
   	public function onJoga(PlayerJoinEvent $event){
   		
   		          $player = $event->getPlayer();
   		     $nane = $player->getName();
   		     
   		 $this->archive->set($player->getName());
   		                $this->archive->save();
   		               }
   		            }
   		            
   		           
   	  
   	  
