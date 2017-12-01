<?php

session_start();
use Controller\Controller;

spl_autoload_register(function ($className) {
    require_once 'Classes/' . \str_replace('\\', '/', $className) . '.php';
});

$contrl = Controller::getController();
$contrl->deleteComment($_POST['date'], $_POST['user_uid']);

if ($_POST['food'] == "meatballs") {
 		header('Location: View/meatballs.php');
 	} elseif ($_POST['food'] == "pancakes"){
 		header('Location: View/pancake.php');
 	}