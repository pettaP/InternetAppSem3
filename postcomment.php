<?php

session_start();
use Controller\Controller;
spl_autoload_register(function ($className) {
    require_once 'Classes/' . \str_replace('\\', '/', $className) . '.php';
});

$u_uid = $_POST['u_uid'];
$food = $_POST['food'];

if(empty($_POST['message'])){
	$message = "";
} else {
	$message = $_POST['message'];
	if (!ctype_print($message)) {
		$contrl = Controller::getController();
		$contrl->killSession();
		header("Location: View/test.php");
	} else {
		continue;
	}
}


if ($u_uid == "null"){
	header("Location: signup.php");
	exit();
} else {
	$contrl = Controller::getController();
	$contrl->postComment($u_uid, $food, $message);

	if ($food == "meatballs") {
		header("Location: View/meatballs.php");
	}
	elseif ($food == "pancakes") {
		header("Location: View/pancake.php");
	} 
}




