<?php
class Lap extends CI_Model {

	function __construct()
				{
					parent::__construct();
				}

	function getfile()
	{
	$fp = file_get_contents("Lab0-testcase.php");
	return $fp; 
	
	}

}
?>