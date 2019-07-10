<?php

namespace UnknownBallin\PingTag;

use pocketmine\plugin\PluginBase;

class PingTag extends PluginBase{
	
	protected static $instance;
	
	public function onEnable():void{
		self::$instance=$this;
		@mkdir($this->getDataFolder());
		$this->saveDefaultConfig();
		$this->getScheduler()->scheduleRepeatingTask(new PingTagTask, 10);
	}
	public static function getInstance():self{
		return self::$instance;
	}
}
