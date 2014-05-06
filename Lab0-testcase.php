<?php
class Member  //B
{
	var $id;
	var $name;

	//สำหรับ กำหนด Attribute ชื่อ
	public function setName($name) //B
	{
		$this->name = $name;
	}

	//สำหรับ ดึงข้อมูล Attribute ชื่อ
	public function getName() //B
	{
		return $this->name;
	}

	//สำหรับ กำหนด Attribute รหัสสมาชิก
	public function setId($id) //B
	{
		$this->id = $id;
	}

	//สำหรับ ดึงข้อมูล Attribute รหัสสมาชิก
	public function getId() //B 
	{
		return $this->id;
	}

	/* จบการทำงาน */
}


?>