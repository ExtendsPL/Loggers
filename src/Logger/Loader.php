<?php

/**
* Plugin by ς๐lคв๐ςђッ 
*/

namespace Loggers;

use pocketmine\event\Listener;

use pocketmine\plugin\PluginBase;

use pocketmine\utils\Config;

use pocketmine\Server;

use pocketmine\event\player\PlayerJoinEvent;

class Loader extends PluginBase implements Listener{
	
	 public function onEnable(){
	 	
	 	Server::getinstance()->getPluginManager()->registerEvents($this, $this);
	 	
	 }
	 
	public function onLoad(){
		
		if(!is_file($this->getDataFolder())){
			@mkdir($this->getDataFolder(), 0777, true);
		             $this->config = new Config($this->getDataFolder(). "Loggers.json", Config::JSON, ARRay());
		           }
		        }
		        
		    public function onJogador(PlayerJoinEvent $event){
		    	
		    $player = $event->getPlayer();
		    
		    $name = $player->getName();
		    
		   //Banco de dados -IP
		   	    
		 $this->config->set($player->getName());
		                 $this->config->save();
		}
		
	}
?>
