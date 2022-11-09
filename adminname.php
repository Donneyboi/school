<?php session_start();
include "db.php";
$id=$_SESSION['admin'];
$select=mysqli_query($conn, " select * from  admin where id='$id'");
$arr=mysqli_fetch_array($select);
$firstn=$arr['firstname'];
$lastn=$arr['lastname'];
echo $firstn."  ".$lastn;


 ?>