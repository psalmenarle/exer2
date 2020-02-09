<?php
 class profile{
	public $db;

	public function __construct(){
		$this->db = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
		if(mysqli_connect_errno()){
			echo "Database connection error.";
			exit;
		}
	}

	public function get_profile(){
		$sql = "SELECT * FROM btsprofile";
		$result = mysqli_query($this->db,$sql);
		while($r = mysqli_fetch_assoc($result)){
			$list[] = $r;
		}
		return $list;
	}
	
}
