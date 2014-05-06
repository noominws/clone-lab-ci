<?php
/**
#########################
Controller แสดงข้อมูลและคำนวนเงินเดือนต่างๆของ employee
ผู้พัฒนา: นาย บัณฑิต  สุวรรณเลิศ 552535003
พัฒนาเมื่อ: 2014-05-02 14:39 AM
ภายในประกอบด้วย
- function index() สำหรับแสดงผลในหน้าแรก
	โดยด้านในจะมีคำสั่งที่ใช้ในการหาค่า Max, Min, Avg
#########################
**/
class Main extends CI_Controller 
{
	function __construct()
			{
				parent::__construct();
			
			}
	function index()
	{
		$this->load->view('home');
	}
}	
?>