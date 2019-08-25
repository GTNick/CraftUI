<?php
namespace CustomCraftingUI;

use jojoe77777\Formapi\SimpleForm;
use jojoe77777\Formapi\CustomForm;
use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use pocketmine\Player;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\CommandExecutor;
use pocketmine\command\ConsoleCommandSender;
class Main extends PluginBase implements Listener {
        }
	public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool{
	     if($cmd->getName() == "craft"){
			 if($sender instanceof Player){
				$api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
				if ($api === null || $api->isDisabled()) {
				}
				$form = $api->createSimpleForm(function (Player $sender, array $data) {
					$result = $data[0];
					if ($result === null) {
					}
					switch ($result) {
	case 1:
				
		$inv = $sender->getInventory();
		       if($inv->contains(Item::get(41,1,256))){
		$level = $sender->getLevel();
		$x = $sender->getX();
		$y = $sender->getY();
		$z = $sender->getZ();
		$pos = new Vector3($x, $y + 2, $z);
		$pos1 = new Vector3($x, $y, $z);
		$name = $sender->getName();
		$level->addSound(new EndermanTeleportSound($pos1));
		$level->addParticle(new LavaParticle($pos1));
		$inv->removeItem(Item::get(131,1,1));
		$this->getServer()->broadcastMessage("§6$name §8Crafted a §6Royle Sword!");
		$inv = addItem(Item::get(283,1,1));
	}
	}else{
		$sender->sendMessage("§6 You don't have the items required to craft the Royale Sword");
	}
break;
