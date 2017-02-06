<?php
require_once('assets/db/config.php');

class USER
{
	private $conn;

	public function __construct()
	{
		$database = new Database();
		$db = $database->Database_Connection();
		$this->conn = $db;
	}
	public function test_input($data) 
	{
  		$data = trim($data);
  		$data = stripslashes($data);
  		$data = htmlspecialchars($data);
  		return $data;
	}

	public function runQuery($sql)
	{
		$stmt = $this->conn->prepare($sql);
		return $stmt;
	}
	public function register($username,$email,$mobile_no)
	{
		try
		{				
			$stmt = $this->conn->prepare("INSERT INTO members(username,email,mobile_no) 
			                                             VALUES(:username, :email, :mobile_no)");
			$stmt->bindparam(":username",$username);
			$stmt->bindparam(":email",$email);
			$stmt->bindparam(":mobile_no",$mobile_no);
			$stmt->execute();	
			return $stmt;
		}
		catch(PDOException $ex)
		{
			$ex->getMessage();
		}
	}
	public function redirect($url)
	{
		header("Location: $url");
	}
	
}
?>