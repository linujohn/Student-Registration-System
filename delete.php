<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/index.css"> 
	<title>MEC | SIS</title>
	<link rel="shortcut icon" href="images/mec.jpg">
	<script type="text/javascript" >
		function validate(){
			if(document.del.ktu.value=='')
	        {
	          window.alert("Please Enter KTU Reg No!");
	          document.del.ktu.focus();
	          return false;

	        }
		}
	</script>
</head>

<body>
	<div class="container">
		<p align="center">
	   	<img src='images/mec.jpg' alt='Logo'>
	   </p>
	</div>
	<center>
		<h1  align="center">STUDENT INFORMATION SYSTEM</h1>
	
		<a href="index.php">ADD</a>&nbsp&nbsp&nbsp&nbsp<a href="update.php">UPDATE</a>&nbsp&nbsp&nbsp&nbsp<a href="delete.php">DELETE</a>&nbsp&nbsp&nbsp&nbsp<a href="search.php">SEARCH</a><br><br>
	</center>




<center>
<form method="POST" action="" name="del" onsubmit="return validate()">


<tr>
		<td>ENTER KTU REG NO:</td>
		<td><input type="text" name="ktu" /></td>
	</tr>

		<td>&nbsp;</td>
		
		<button name="bsubmit">Delete</button>
	</tr>
 </table>
</form>
</center>
</body>
</html>


<?php
require'db_conn.php';

$ktu=$_POST['ktu'];
$cap3=mb_strtoupper($ktu, 'UTF-8');

if(isset($_POST['bsubmit']))
 {

 $del=mysqli_query($con,"DELETE FROM student where ktu='$cap3'");


if($del)
{
 echo"<center>Record Successfully Deleted</center>";
}
else
{

echo"<center>Your Record Not Deleted</center>" ;
}
 }
?>
