<?php
/*#####################################################################
*
* By :: Tanapat Limsombat 552535002
* Responsibility :: Model
* Create Date :: 29/04/2557
*
* Function :: 1.getFile() - read txt file and send array to controller
*			  2.browse() - find txt file read & convert to array
*
*
*
######################################################################*/

class Psp extends CI_Model {  //B

	function __construct() //B
		{
			parent::__construct(); //B
		}

	function getFile()   //method //B         //เรียกใช้งานไฟล์   txt จากโฟลเดอร์ที่เก็บไฟล์ไว้
	{
	$fp = file("Lab0-testcase.php"); //B       //อ่านไฟล์ Lab0-testcase.php เรียกมา
	return $fp;  //B  //ส่งค่ากลั
	}

	function browse($filename)  //method //M
	{
	$data['filedata'] = fopen($filename,'r');  //M  //กำหนดให้ข้อมูลอยู่ในรูปแบบของ array และใช้คำสั่ง fopen ในการอ่านไฟล์เอกสาร
	return($data);   //M  //ส่งค่า array กลับ
	}

	function readFiles($filePath)		//method		//A
		{
			$text = file($filePath);			//A
			return $text;						//A
		}
}
?>
