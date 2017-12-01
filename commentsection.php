<?php

session_start();
use Controller\Controller;
use Model\User;

	if (Controller::getController()->seesionSet()){
		echo "<div><form action='../postcomment.php' method='POST'>
					<input type='hidden' name='u_uid' value='".Controller::getController()->getUser()->getUname()."'>
					<input type='hidden' name='food' value='".$food."'>
					<textarea name='message'></textarea><br/>
					<button type='submit' name='commentSubmit'>Comment</button>
				</form></div>";
		} else {
			echo "<div><form action='../postcomment.php' method='POST'>
					<input type='hidden' name='u_uid' value='null'>
					<input type='hidden' name='food' value='".$food."'>
					<textarea name='message'></textarea><br/>
					<button type='submit' name='commentSubmit'>Comment</button>
				</form></div>";
		}
	
