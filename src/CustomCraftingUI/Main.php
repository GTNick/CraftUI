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

public function  sendTestForm(Player $player) {
        $api = Server::getInstance()->getPluginManager()->getPlugin("FormAPI");
        if ($api === null || $api->isDisabled()) {
            return;
        }
        $form = $api->createSimpleForm(function (Player $sender, ?int $result = null) {
            if ($result === null) {
                return true;
            }
         });
       
        $form->setTitle("Custom Crafting");
        $form->setContent("Recipes");
        $form->addButton("Filler", SimpleForm::IMAGE_TYPE_URL , "diamondsword.png");
        $form->addButton("Filler", SimpleForm::IMAGE_TYPE_URL ,  "goldarrow.png");
        $form->sendToPlayer($player);
