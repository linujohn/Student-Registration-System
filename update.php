<!DOCTYPE html>

<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/index.css"> 
  <title>MEC | SIS</title>
  <link rel="shortcut icon" href="images/mec.jpg">
  <script type="text/javascript" src="js/validate.js"></script>  

</head>
<body>
  <div class="container">
    <p align="center">

      <img src='images/mec.jpg' alt='Logo'>
     </p>
  </div>
<center>




<h1  align="center">STUDENT INFORMATION SYSTEM</h1>

<center><a href="index.php">ADD</a>&nbsp&nbsp&nbsp&nbsp<a href="update.php">UPDATE</a>&nbsp&nbsp&nbsp&nbsp<a href="delete.php">DELETE</a>&nbsp&nbsp&nbsp&nbsp<a href="search.php">SEARCH</a><br><br></center>


</center>
<form  method="post" name="reg" onsubmit="return validate()">
  
  <div>
    <label>First Name:<br></label>
    <input type="text" name="fname">
  </div>
  <div>
    <label>Last Name:<br></label>
    <input type="text" name="lname">

  </div>
    <div>
    <label>Admission No:<br></label>
    <input type="text" name="admn">

  </div>
  <div>
    <label>KTU Register No:<br></label>
    <input type="text" name="ktu">

  </div>

  <div>
      <label for="bday">DOB:</label>
      <input type="date" id="bday" name="bday">
  </div>
  <div>
    <label>Branch:<br></label>
    <select name="branch">
      <option >Select Branch</option>
      <option value="CSE">CSE</option>
      <option value="ECE">ECE</option>
      <option value="BME">BME</option>
      <option value="EEE">EEE</option>
    </select>
  </div>

  <div>
    <label>Semester:<br></label>
    <select name="semester">
      <option >Select Semester</option>
      <option value="S1">S1</option>
      <option value="S2">S2</option>
      <option value="S3">S3</option>
      <option value="S4">S4</option>
      <option value="S5">S5</option>
      <option value="S6">S6</option>
      <option value="S7">S7</option>
      <option value="S8">S8</option>
    </select>
  </div>
  <div> 
    <label>Batch<br></label>
    <select name="batch">
      <option >Select Batch</option>
      <option value="A">A</option>
      <option value="B">B</option>
      <option value="NA">NA</option>
      
      
    </select>
  </div>
  <div>
    <label>Roll No:<br></label>
    <input type="text" name="roll">

  </div>

  <div>
      <button  name="bsubmit" >Submit</button>
  </div>

  

</form>

</body>
</html>


<?php
require'db_conn.php';

$fn=$_POST['fname'];
$ln=$_POST['lname'];
$admn=$_POST['admn'];
$ktu=$_POST['ktu'];
$rawdate = htmlentities($_POST['bday']);
$bd = date('Y-m-d', strtotime($rawdate));

$branch=$_POST['branch'];
$semester=$_POST['semester'];
$batch=$_POST['batch'];
$roll=$_POST['roll'];


$cap1=strtoupper($fn);
$cap2=strtoupper($ln);
$cap3=mb_strtoupper($ktu, 'UTF-8');

if(isset($_POST['bsubmit']))
 {

    $q1=mysqli_query($con,"UPDATE student SET fname='$cap1',lname='$cap2',admn='$admn',ktu='$cap3',bday='$bd',branch='$branch',semester='$semester',batch='$batch',roll='$roll' where ktu ='$cap3'");
    if($q1)
    {
      echo"Record Successfully Updated";
    }
    else
    {

      echo"<center>Your Record not Updated</center>" ;
    }
 }
?>
