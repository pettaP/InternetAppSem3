<?php

use Controller\Controller;
use Model\User;

spl_autoload_register(function ($className) {
    require_once 'Classes/' . \str_replace('\\', '/', $className) . '.php';
}); 

if (empty($_POST['uid']) || empty($_POST['pwd'])) {
	
	header("Location: View/loginerror.php?login=error");
	exit();
} else {
	echo " contaction controller";
	$contrl = Controller::getController();
	$result = $contrl->logIn($_POST['uid'], $_POST['pwd']);

	if ($result == "error"){
		header("Location: View/loginerror.php?login=error");
		exit();
	} elseif ($result == "succsess"){
		header("Location: View/test.php?login=succsess");
		exit();
	}
	
}
