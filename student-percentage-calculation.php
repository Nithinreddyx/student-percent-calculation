  <!DOCTYPE html>
<html>
<head>
<meta charaset = "utf-8">
<title> contact form </title>
</head>
<body>
		    <form method="POST" action="form9.php"> 
			<center>
			<h1 style="margin:10;padding:5px;background:#333;color:#fff;text-align:center">
			COLLEGE  APPLICATION
			</h1>
			<table style="margin:0;padding:5px;background:#333;color:#fff;aline:center;">
				 <tr>
                 <td> Student Name:</td>
                 <td>
                 <input type=text name="StudentName">
                 </td>
                 </tr>

				 <tr>
                 <td> contact number:</td>
                 <td>
                 <input type=number name="contactnumber">
                 </td>
                 </tr>
				 
				  <tr>
                 <td> email:</td>
                 <td>
                 <input type=text name="email">
                 </td>
                 </tr>
				 
				  <tr>
                 <td>college name:</td>
                 <td>
                 <input type=text name="collegename">
                 </td>
                 </tr>
				 
				  <tr>
                 <td>Year of study:</td>
                 <td>
                 <input type=text name="Yearofstudy">
                 </td>
                 </tr>
				 
				 <tr>
				<td>Marks Obtained:</td>
				<td><input type="number" name="x" value="x" placeholder ="Total marks"></td>
				</tr>
				
				<tr>
				<td><button type ="submit" name="submit">submit</Button>
				</tr>
				
	    </table>
		
		<?php
	if(isset($_POST['submit']))
    {
		$StudentName= $_POST["StudentName"];
		$contactnumber= $_POST["contactnumber"];
		$email= $_POST["email"];
		$collegename= $_POST["collegename"];
		$Yearofstudy= $_POST["Yearofstudy"];
		$x= $_POST["x"];
		$total = 500;
		$percentage = ($x*100)/$total;
	
	
	
	if($percentage>=70)
		{
			 $grade="Distinction";
		}
	elseif($percentage>=60)
		{
			 $grade="firstclass";
		}
	elseif($percentage>=40)
		{
			 $grade="pass class" ;
		}
	elseif($percentage<40)
		{
			 $grade="Fail";
		}
		
	
	echo "<font size=4><center><h3>Form Registered Sucessfully!!!</h3></center>"; 
	echo "<font size=4><center><h3>StudentName: ".$StudentName."</h3></center>"; 
    echo "<font size=4><center><h3>Total marks Obtained: ".$x."</h3></center>"; 
    echo "<font size=4><center><h3>Percentage: ".$percentage."</h3></center>"; 
    echo "<font size=4><center><h3>Grade: ".$grade."</h3></center>"; 
	}
	?>
		</form>
</body>
</html>
