<?php
$host='localhost';
$user='root';
$pass='';
$db='student';

//create connection
$conn=new mysqli($host,$user,$pass,$db);
echo 'connection success...';

$pna='Dell';
$prt=40000;

$sql="insert into prod_det(pname,prate) values('$pna','$prt')";

$res=$conn->query($sql);

if($res==TRUE)
{
    echo '<br>Data insertion Success...';
}
else
{
    echo 'Error...';
}

$conn->close();
?>