<?php

namespace Model;

class Comment {

	private $userid;
	private $date;
	private $food;
	private $comment;

	/**
	*Constructor - construct an instance of a specific comment from the *database and stores the variables associated to it.
	*@userid - the users id who posted the comment
	*@date - timestamp of the comment
	*@food - th dish related to the comment
	*@comment - the comment posted by the user
	**/
	public function __construct($userid, $date, $food, $comment){

		$this->userid = $userid;
		$this->date = $date;
		$this->food = $food;
		$this->comment = $comment;
	}

	public function getUserId(){

		return $this->userid;
	}

	public function getDate(){
		return $this->date;
	}

	public function getFood(){

		return $this->food;
	}

	public function getUserComment() {

		return $this->comment;
	}
}
?>