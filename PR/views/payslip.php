<html>
<head>
<meta charset="utf-8">
<title>slip</title>
<!-- สีhead -->
<style type="text/css">
	<!--
	#test {
	width: 100%;
	background-color: #8B6914;
	height: 130px;
	vertical-align:middle;
	}
	-->
</STYLE>
<!-- ปิดโชวข้อความที่ปริน -->
<STYLE type=text/css>
#printable { display: block; }
@media print 
{ 
#non-printable { display: none; } 
#printable { display: block; } 
}
</STYLE>
<!-- เส้นตาราง -->
<style type="text/css">
table.coll 
{
border-collapse: collapse
}
</style>
</head>
<body>
<DIV id=non-printable> 
<FONT color=red><B>
<div id="test">
<br>
<font size="60" color="#FFFFFF">&nbsp;&nbsp;<u>ระบบเงินเดือน</u></font><br>
</div>
</B></FONT>
</DIV>
<br>
<DIV id=printable> 
<CENTER><FONT color=blue><B>
<hr>
<table class="coll" border="1" cellpadding="2" cellspacing="2" width="760px;" height="360;">
			<tbody>
				<tr>
					<td colspan="4">
						<table>
							<tr>
								<td >งวดวันที่ : ................................... </td>
							</tr>
							<tr>
								<td>ชื่อ-นามสกุล : ...................................... </td>
								<td> ตำแหน่ง : ...................................... </td>
							</tr>
							<tr>
								<td>รูปแบบ : ........................ : ............................. บาท</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td  rowspan="3" >
						<table>
						<tr>
							<td>ข้อมูลการทำงาน : </td>
						</tr>
						<tr>
							<td>วันทำงานจริง</td><td>..........</td><td>วัน</td>
						</tr>
						<tr>
							<td>ขาดงาน</td><td>..........</td><td>วัน</td>
						</tr>
						<tr>
							<td>มาสาย-ออกก่อน</td><td>..........</td><td>นาที</td>
						</tr>
						<tr>
							<td>ค่าล่วงเวลา</td><td>..........</td><td>ชั่วโมง</td>
						</tr>
						</table>
					</td>
					<td colspan="2">
							<table>
								<tr><td>รายได้ : </td></tr>
								<tr>
									<td >รายได้จากการทำงาน : </td><td>.................... </td><td>บาท</td>
								</tr>
								<tr>
									<td >รายได้จากค่าล่วงเวลา : </td ><td > ....................</td ><td > บาท </td >
								</tr>
							</table>
					</td>
					<td  >.................บาท</td>
				</tr>
				<tr>
					<td   colspan="2">
						<table>
								<tr><td>รายหัก : </td></tr>
								<tr>
									<td >หักประกันสังคม : </td><td>.................... </td><td>บาท</td>
								</tr>
								<tr>
									<td >หักขาดงาน : </td ><td > ....................</td ><td > บาท </td >
								</tr>
								<tr>
									<td >หักมาสาย-ออกก่อน : </td ><td > ....................</td ><td > บาท </td >
								</tr>
								<tr>
									<td >หักภาษี : </td ><td > ....................</td ><td > บาท </td >
								</tr>
						</table>
					</td>
					<td  >.................บาท</td>
				</tr>
				<tr>
					<td  colspan="2">รับสุทธิ (..............................................................)</td>
					<td  >.................บาท</td>
				</tr>
				<tr>
					<td colspan="2">ลงชื่อผู้รับเงิน</td>
					<td colspan="2">วันที่รับเงิน</td>
				</tr>
			</tbody>
		</table>
	</B></FONT></CENTER>
</DIV>
<hr>
<br><br>
<DIV id=non-printable> 
<CENTER><FONT color=red><B>
<center><input type="button" onClick="window.print()" value="พิมพ์ใบเสร็จ"/>
&nbsp;&nbsp;&nbsp;&nbsp;
<input type="button" onClick="window.history.back()" value="กลับ"/></center>
</B></FONT></CENTER>
</DIV>

</body>
</html>