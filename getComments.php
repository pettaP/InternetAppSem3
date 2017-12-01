<?php
session_start();

use Controller\Controller;
use Intergration\DBH;
use Model\Comment;
	
	spl_autoload_register(function ($className) {
            require_once 'Classes/' . \str_replace('\\', '/', $className) . '.php';
        });

	$contr = Controller::getController();
	
	$comments = $contr->getComments($food);

	foreach ($comments as $value) {
		echo "<div class='commentbox'>";
			echo "<p>".$value->getUserId()."</p>";
			echo "<p>".$value->getDate()."</p><br>";
			echo "<p>".$value->getUserComment()."<p>";

			$date = $value->getDate();

			if (Controller::getController()->seesionSet()){
				if (Controller::getController()->getUser()->getUname() == $value->getUserId()) {
					echo "<div class='deletebutton'>";
						echo "<form action='../deleteusercomment.php' method='POST'>
								<input type='hidden' name='date' value='".$date."'>
								<input type='hidden' name='user_uid' value=".$value->getUserId().">
								<input type='hidden' name='food' value=".$food.">";
							echo "<button type='submit' name='commentDelete'>Delete</button>";
						echo "</form>";
					echo "</div>";
					echo "</div>";
				} else {
					echo "</div>";
				}
			} else {
				echo "</div>";
		}	
	
	}		

