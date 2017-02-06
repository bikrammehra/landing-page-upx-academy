<?php
require_once('class.user.php');

$user_mag=new USER();

if(!empty($_POST["username"])) {

	$stmt = $user_mag->runQuery("SELECT count(*) FROM members WHERE username='" . $_POST["username"] . "'");
	$stmt->execute(array());
	$row = $stmt->fetchColumn();
	if ($row > 0)
		echo "<span id='status_no'> Username Already Exists!!</span>";
	else
		echo "<span id='status_yes'> Username Available.</span>";
}

if(!empty($_POST["email"])) {

	if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)==true)
	{
		$stmt = $user_mag->runQuery("SELECT count(*) FROM members WHERE email='" . $_POST["email"] . "'");
		$stmt->execute(array());
		$row = $stmt->fetchColumn();
		if ($row > 0)
			echo "<span id='status_no'> Email Already Exists!!</span>";
		else
			echo "<span id='status_yes'> Email Available </span>";
	}
	else
		echo "<span id='status_no'> Email not valid </span>";

}

?>