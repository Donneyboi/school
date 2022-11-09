<?php session_start();
include "db.php";
$id=$_SESSION['admin'];
$select=mysqli_query($conn," select * from admin where id='$id'");
$arr=mysqli_fetch_array($select);
$file=$arr['file'];

echo $file;




 ?>