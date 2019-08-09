
<?php
namespace CustomCraftingUI;

use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use pocketmine\Player;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\CommandExecutor;
use pocketmine\command\ConsoleCommandSender;

use pocketmine\inventory\Inventory;

class Main extends PluginBase implements Listener {

    public function onEnable() {
      $this->getServer()->getPlugin();
