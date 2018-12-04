<?php
require_once 'Database.php';

class Boisson{

	public function getBoisson()
	{
		$db = new \lib\Database();

		$req = "SELECT * FROM Boisson";
		$data = $db->query($req);
		return $data;
	}

}
?>