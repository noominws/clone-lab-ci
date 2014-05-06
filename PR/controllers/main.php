<?php
class main extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		
		$this->load->helper(array('form', 'url'));
		$this->load->model('Employee');
		$this->load->model('Payroll');
		$this->load->model('Worktime');
	}

	 function index()
	{
		$this->load->view('welcome');
	}
###### ดูพนักงานทั้งหมด ######
	function doEmp()
	{
		$data['employees'] = $this->Employee->getListEmployee();
		$data['salaryTypes'] = $this->Employee->getTypes();
		$data['worktimes'] = $this->Worktime->getListWorktime();
		$this->load->view('list', $data);
	}
/*
###### ดูพนักงานตามรูปแบบการจ่ายเงิน ######
	function doSearchKeyword()
    {
		$keyword = $this->input->post('keyword');
		$data['employees'] = $this->Employee->searchKeyword($keyword);
		$data['salaryTypes'] = $this->Employee->getTypes();
		$this->load->view('list',$data);
    }
###### เลือกช่วงเวลาที่จำนำมาคำนวนเงินเดือน ######
	function selectDay()
    {
		$this->load->view('workday');
    }
*/
###### คำนวนเงินเดือน ######
	function paySalary($empId)
    {
		//echo $empId;
		$this->Payroll->calWorkDay($empId);
		//echo $workDay;

		
	}
	
}
?>