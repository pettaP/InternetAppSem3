<?php
	session_start();

	use Controller\Controller;
	use Model\SignUpUser;
	
	spl_autoload_register(function ($className) {
            require_once 'Classes/' . \str_replace('\\', '/', $className) . '.php';
        });

	$first = $_POST['fname'];
	$last = $_POST['lname'];
	$email =  $_POST['email'];
	$uname = $_POST['uname'];
	$pwd = $_POST['pwd'];

	if (empty($first) || empty($last) || empty($email) || empty($uname) || empty($pwd)) {

		header("Location: View/signup.php?signup=empty");
		exit();
	} else {
		$contrl = Controller::getController();
		$result = $contrl->signUpNewUser($first, $last, $email, $uname, $pwd);
	}

	switch ($result) {
		case 'invalid':
			header("Location: View/signup.php?signup=invalid");
			break;
		case 'email':
			header("Location: View/signup.php?signup=email");
			break;
		case 'usertaken':
			header("Location: View/signup.php?signup=usertaken");
			break;
		case 'error':
			header("Location: View/signup.php?signup=error");
			break;
		case 'success':
			header("Location: View/signup.php?signup=success");
			break;
	}
