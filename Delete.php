<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <style>
	 <style>
            * {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image: url('p2.jpg');
  background-repeat: no-repeat;
   background-attachment: fixed;
  background-size: 100% 100%;
}

.header {
  overflow: hidden;
  background-color: black;
  
  padding: 10px 10px;
}
.h{
color:white;}
.header a {
  float: left;
  color: white;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 50px;
  font-weight: bold;
}



.header a.active {
  background-color: red;
  color: white;
}
.header-right a:hover{
 background-color: red;
  color: white;
  }
.header-right {
  float: right;
 
}
 
    </style>
</head>
<body>

 <div class="header">
  <a class="logo"> STUDENT DETAILS SAVED</a>
  <div class="header-right">
    <a href="Home2.html" >Home</a>
    <a href="New_Course.html" style="color:white">Add Student</a>
    <a href="Update.html" style="color:white"  >Modify Student</a>
	<a href="Remove.html" style="color:white" class="active">Remove Student</a>
	<a href="Read.php" style="color:white">View Details</a>
  </div>
</div>

<?php
$host='localhost';
$user='root';
$pass='';
$db='student';


//connection
$conn=new mysqli($host,$user,$pass,$db);
//echo 'Connection Success...<br>';

$dd=$_POST['dd'];

$sql="delete from details where ID='$dd'";
$res=$conn->query($sql);
if($res==TRUE)
{
    echo '<h2 color="white" align="center">Data Deletion Success...<h2>';
}
else
{
    echo 'Error...';
}

$conn->close();

?>
</body>
</html>