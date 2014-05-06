<?php
class Worktime extends CI_Model
{
	var $workId; //PK
	var $workDay; //จำนวนวันที่มาทำงาน
	var $dayAbsent; //จำนวนวันที่ขาดงาน
	var $lateTime; //จำนวนนาทีการมาสาย
	var $overTime; //จำนวนนชั่วโมงล่วงเวลา
	var $empId; //รหัสพนักงาน

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	###### SET : workId (PK) ######
	function setWorkId($workId)
	{
		$this->workId = $workId;
	}
	###### GET : workId (PK) ######
	function getWorkId()
	{
		return $this->workId;
	}
	###### SET : workDay (จำนวนวันที่มาทำงาน) ######
	function setWorkDay($workDay)
	{
		$this->workDay = $workDay;
	}
	###### GET : workDay (จำนวนวันที่มาทำงาน) ######
	function getWorkDay()
	{
		return $this->workDay;
	}
	###### SET : dayAbsent (จำนวนวันที่ขาดงาน) ######
	function setDayAbsent($dayAbsent)
	{
		$this->dayAbsent = $dayAbsent;
	}
	###### GET : dayAbsent (จำนวนวันที่ขาดงาน) ######
	function getDayAbsent()
	{
		return $this->dayAbsent;
	}
	###### SET : lateTime (จำนวนนาทีการมาสาย) ######
	function setLateTime($lateTime)
	{
		$this->lateTime = $lateTime;
	}
	###### GET : lateTime (จำนวนนาทีการมาสาย) ######
	function getLateTime()
	{
		return $this->lateTime;
	}
	###### SET : overTime (จำนวนนชั่วโมงล่วงเวลา) ######
	function setOverTime($overTime)
	{
		$this->overTime = $overTime;
	}
	###### GET : overTime (จำนวนนชั่วโมงล่วงเวลา) ######
	function getOverTime()
	{
		return $this->overTime;
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

	###### Function ######
function getListWorktime()
	{
		$query = $this->db->get('worktimes');
		return $query;

	}
}
?>