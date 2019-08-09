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

    public function onEnable() {
        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        if($api === null){
            $this->getServer()->getPluginManager()->disablePlugin($this);
        }
    }

    public function onCommand(CommandSender $sender, Command $cmd, string $label,array $args) : bool {
        switch($cmd->getName()){
            case "Custom Item here":
                if($sender instanceof Player) {
                    $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
                    $form = $api->createSimpleForm(function (Player $sender, $data){
                    $result = $data[0];

                    if($result === null){
                        return true;
                     }
                    });
                    
                    $form->setTitle("Custom Recipe");
                    $form->setContent("Please choose your destination.");
                    $form->addButton(TextFormat::BOLD . "CustomeItem");
                    $form->sendToPlayer($sender);
                }
                else{
                    $sender->sendMessage(TextFormat::RED . "Use this Command in-game.");
                    return true;
                }
            break;
        }
        return true;
    }
}
