<?php
class Payroll extends CI_Model
{
	var $payId; //PK
	var $tax; //����
	var $socialSecurity; //��Сѹ�ѧ��
	var $empId; //���ʾ�ѡ�ҹ

	function __construct()
	{
			parent::__construct();
			$this->load->database();
	}

	###### SET : payId (PK) ######
	function setPayId($payId)
	{
		$this->payId = $payId;
	}
	###### GET : payId (PK) ######
	function getPayId()
	{
		return $this->payId;
	}
	###### SET : tax (����) ######
	function setTax($tax)
	{
		$this->tax = $tax;
	}
	###### GET : tax (����) ######
	function getTax()
	{
		return $this->tax;
	}
	###### SET : socialSecurity (��Сѹ�ѧ��) ######
	function setSocialSecurity($socialSecurity)
	{
		$this->socialSecurity = $socialSecurity;
	}
	###### GET : socialSecurity (��Сѹ�ѧ��) ######
	function getSocialSecurity()
	{
		return $this->socialSecurity;
	}
	###### SET : empId (���ʾ�ѡ�ҹ) ######
	function setEmpId($empId)
	{
		$this->empId = $empId;
	}
	###### GET : empId (���ʾ�ѡ�ҹ) ######
	function getEmpId()
	{
		return $this->empId;
	}

	###### FUNCTION ######
	function calWorkDay($empId) // ��ӹǹ�Թ�����ҡ��÷ӧҹ����ѹ�ӧҹ
	{
	//echo $empId;
	//echo +'15'+'$empId';

		$query = "SELECT  employees.empId,employees.salary, worktimes.workDay ".
		 "FROM employees, worktimes ".
		"WHERE employees.empId = worktimes.empId";
		
		$result = mysql_query($query) or die(mysql_error());
	
			while($row = mysql_fetch_array($result))
				{
			echo $row['empId']. " - ". $row['workDay'];
			echo "<br />";
				}

		
	}
	function calDayAbs() // ��ӹǹ�Թ���١�ѡ�ҡ��âҴ�ҹ
	{

	}
	function calLateTime() // ��ӹǹ�Թ���١�ѡ�ҡ��������
	{

	}
	function calOverTime() // ��ӹǹ�Թ�����ҡ��÷ӧҹ��ǧ����
	{

	}
	function calTax() // ��ӹǹ����
	{

	}
	function calSocial() // ��ӹǹ��Сѹ�ѧ��
	{

	}
	function calNatSalary() // ��ӹǹ�Թ���ط��
	{

	}

}
?>