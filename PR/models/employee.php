<?php
class Employee extends CI_Model
{
	var $empId; //รหัสพนักงาน
	var $name; //ชื่อพนักงาน
	var $lastName; //นามสกุลพนักงาน
	var $position; //ตำแหน่ง
	var $salary; //เงือนเดือน
	var $salaryType; //รูปแบบการจ่ายเงือนเดือน
		
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	###### SET : empId (รหัสพนักงาน) ######
	function setEmpId($empId)
	{
		$this->empId = $empId;
	}
	###### GET : empId (รหัสพนักงาน) ######
	function getEmpId()
	{
		return $this->empId;
	}
	###### SET : name (ชื่อพนักงาน) ######
	function setName($name)
	{
		$this->name = $name;
	}
	###### GET : name (ชื่อพนักงาน) ######
	function getName()
	{
		return $this->name;
	}
	###### SET : lastName (นามสกุลพนักงาน) ######
	function setLastName($lastName)
	{
		$this->lastName = $lastName;
	}
	###### GET : lastName (นามสกุลพนักงาน) ######
	function getLastName()
	{
		return $this->lastName;
	}
	###### SET : position (ตำแหน่ง) ######
	function setPosition($position)
	{
		$this->position = $position;
	}
	###### GET : position (ตำแหน่ง) ######
	function getPosition()
	{
		return $this->position;
	}
	###### SET : salary (เงือนเดือน) ######
	function setSalary($salary)
	{
		$this->salary = $salary;
	}
	###### GET : salary (เงือนเดือน) ######
	function getSalary()
	{
		return $this->salary;
	}
	###### SET : salaryType (รูปแบบการจ่ายเงือนเดือน) ######
	function setSalaryType($salaryType)
	{
		$this->salaryType = $salaryType;
	}
	###### GET : salaryType (รูปแบบการจ่ายเงือนเดือน) ######
	function getSalaryType()
	{
		return $this->salaryType;
	}


	###### Function ######
	function getListEmployee()
	{
		$query = $this->db->get('employees');
		return $query;
	}
		function getTypes()
	{
		$query = $this->db->get('salaryTypes');
		return $query;
	}
/*
	function searchKeyword($keyword)
    {
		$this->db->like('name',$keyword);
        $query = $this->db->get('employees');
        return $query;
    }
*/
}
?>