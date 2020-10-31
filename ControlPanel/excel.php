<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

</head>
<body alink="#00FF66" link="#00CC00">

<?php



/*Function for displaying all the Aluminis Data in XLS Format*/

function listOfAluminis()
	{
    include("conn.php");
    include("excelwriter.class.php");
	unlink('alumini/aluminis.xls');
	$excel=new ExcelWriter("alumini/aluminis.xls");
	if($excel==false)	
	echo $excel->error;
	
	$myArr=array("Name","Department","Year Of Passing","Currently Working In","Mobile No","Email Id");
	$excel->writeLine($myArr);
	
	$qry=mysqli_query($conn,"SELECT c.alumininame,c.aluminideptname, c.aluminiyearofpassing, c.aluminicurrentlyworkingin, c.aluminimobileno, c.aluminiemailId
							  FROM tbl_alumini AS c") or die("Query Not Executed");
		if($qry!=false)
		{
			$i=1;
			while($res=mysqli_fetch_array($qry))
			{
				$myArr=array($res['alumininame'],$res['aluminideptname'],$res['aluminiyearofpassing'],$res['aluminicurrentlyworkingin'],$res['aluminimobileno'],$res['aluminiemailId']);
		        $excel->writeLine($myArr);
				$i++;
			}
		}
	}

/*Function for displaying all the Faculties Data in XLS Format*/

function listOfFaculties()
	{
    include("conn.php");
    include("excelwriter.class.php");
	unlink('alumini/faculties.xls');
	$excel=new ExcelWriter("alumini/faculties.xls");
	if($excel==false)	
	echo $excel->error;
	
	$myArr=array("Type","Name","Department","Designation","Qualification","Years Of Experience");
	$excel->writeLine($myArr);
	
	$qry=mysqli_query($conn,"SELECT c.type,c.name, c.deptname, c.designation, c.qualification, c.experience
							  FROM tbl_faculty AS c") or die("Query Not Executed");
		if($qry!=false)
		{
			$i=1;
			while($res=mysqli_fetch_array($qry))
			{
				$myArr=array($res['type'],$res['name'],$res['deptname'],$res['designation'],$res['qualification'],$res['experience']);
		        $excel->writeLine($myArr);
				$i++;
			}
		}
	}
	

/*Function for displaying First Year Confirmed and Unconfirmed students*/

function listOfFirstYearUnConfirmedStudents()
	{
    include("conn.php");
    include("excelwriter.class.php");
	unlink('admissions/firstyearnotconfirmed.xls');
	$excel=new ExcelWriter("admissions/firstyearnotconfirmed.xls");
	if($excel==false)	
	echo $excel->error;
	
	$myArr=array("Name","EmailId","MobileNo","Gender","Date Of Birth","Admission To");
	$excel->writeLine($myArr);
	
	$qry=mysqli_query($conn,"SELECT c.candidate_name, c.candidate_email, c.candidate_mobileno, c.candidate_gender, c.candidate_dob,c.admissionTo
							  FROM tbl_admissions AS c where c.status='R'") or die("Query Not Executed");
		if($qry!=false)
		{
			$i=1;
			while($res=mysqli_fetch_array($qry))
			{
				$myArr=array($res['candidate_name'],$res['candidate_email'],$res['candidate_mobileno'],$res['candidate_gender'],$res['candidate_dob'],$res['admissionTo']);
		        $excel->writeLine($myArr);
				$i++;
			}
		}
	
	$excel1=new ExcelWriter("admissions/firstyearconfirmed.xls");
	if($excel1==false)	
	echo $excel1->error;
	
	$myArr1=array("Name","EmailId","MobileNo","Gender","Date Of Birth","Admission To");
	$excel1->writeLine($myArr1);
	
	$qry1=mysqli_query($conn,"SELECT c.candidate_name, c.candidate_email, c.candidate_mobileno, c.candidate_gender, c.candidate_dob,c.admissionTo
							  FROM tbl_admissions AS c where c.status='C'") or die("Query Not Executed");
		if($qry1!=false)
		{
			$i=1;
			while($res1=mysqli_fetch_array($qry1))
			{
				$myArr1=array($res1['candidate_name'],$res1['candidate_email'],$res1['candidate_mobileno'],$res1['candidate_gender'],$res1['candidate_dob'],$res1['admissionTo']);
		        $excel1->writeLine($myArr1);
				$i++;
			}
		}	
		
	}
	


?>
</body>
</html>