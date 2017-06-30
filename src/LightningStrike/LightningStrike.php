<?php

namespace LightningStrike;

use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\network\mcpe\protocol\AddEntityPacket;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerRespawnEvent;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\entity\Entity;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
class LightningStrike extends PluginBase implements Listener{
    /** @var Config */
    private $lightning;
    public function onLoad(){
      $this->getLogger()->info(TextFormat::AQUA."Preparing For StartUp... STAND BY");
    }
    public function onEnable(){
      $this->saveDefaultConfig();
      $this->lightning = $this->getConfig()->getAll();
      $this->getServer()->getPluginManager()->registerEvents($this, $this);
      $this->getLogger()->info(TextFormat::GREEN."Lightning Strike fixed by xXSirGamesXx enabled");
    }
    /**
     * @param Player $p
     * @param $height
     */
 /*   public function onRespawn(PlayerRepsawnEvent $e){
	$p = $e->getPlayer();
        $level = $p->getLevel();
	$light = new AddEntityPacket();
        $light->type = 93;
        $light->entityRuntimeId = Entity::$entityCount++;
        $light->metadata = array();
        $light->speedX = 0;
        $light->speedY = 0;
        $light->speedZ = 0;
        $light->yaw = $p->getYaw();
        $light->pitch = $p->getPitch();
        $light->x = $p->x;
        $light->y = $p->y;
        $light->z = $p->z;
        foreach($level->getPlayers() as $pl){
            $pl->dataPacket($light);
        } 
     }
*/
    public function onRespawn(PlayerRespawnEvent $e){
	$p = $e->getPlayer();
        $level = $p->getLevel();
	$light = new AddEntityPacket();
        $light->type = 93;
        $light->entityRuntimeId = Entity::$entityCount++;
        $light->metadata = array();
        $light->speedX = 0;
        $light->speedY = 0;
        $light->speedZ = 0;
        $light->yaw = $p->getYaw();
        $light->pitch = $p->getPitch();
        $light->x = $p->x;
        $light->y = $p->y;
        $light->z = $p->z;
        foreach($level->getPlayers() as $pl){
            $pl->dataPacket($light);
        } 
     } 
    public function onQuit(PlayerQuitEvent $e){
	$p = $e->getPlayer();
        $level = $p->getLevel();
	$light = new AddEntityPacket();
        $light->type = 93;
        $light->entityRuntimeId = Entity::$entityCount++;
        $light->metadata = array();
        $light->speedX = 0;
        $light->speedY = 0;
        $light->speedZ = 0;
        $light->yaw = $p->getYaw();
        $light->pitch = $p->getPitch();
        $light->x = $p->x;
        $light->y = $p->y;
        $light->z = $p->z;
        foreach($level->getPlayers() as $pl){
            $pl->dataPacket($light);
        } 
     }	
    public function onJoin(PlayerJoinEvent $e){
	$p = $e->getPlayer();
        $level = $p->getLevel();
	$light = new AddEntityPacket();
        $light->type = 93;
        $light->entityRuntimeId = Entity::$entityCount++;
        $light->metadata = array();
        $light->speedX = 0;
        $light->speedY = 0;
        $light->speedZ = 0;
        $light->yaw = $p->getYaw();
        $light->pitch = $p->getPitch();
        $light->x = $p->x;
        $light->y = $p->y;
        $light->z = $p->z;
        foreach($level->getPlayers() as $pl){
            $pl->dataPacket($light);
        } 
     }
    public function onDeath(PlayerDeathEvent $e){
	$p = $e->getPlayer();
        $level = $p->getLevel();
	$light = new AddEntityPacket();
        $light->type = 93;
        $light->entityRuntimeId = Entity::$entityCount++;
        $light->metadata = array();
        $light->speedX = 0;
        $light->speedY = 0;
        $light->speedZ = 0;
        $light->yaw = $p->getYaw();
        $light->pitch = $p->getPitch();
        $light->x = $p->x;
        $light->y = $p->y;
        $light->z = $p->z;
        foreach($level->getPlayers() as $pl){
            $pl->dataPacket($light);
        } 
     }
  }

 
