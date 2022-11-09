<?php session_start();
$id=$_SESSION['admin'];
include "db.php";
if (1==1) {
	$file=basename($_FILES['myfile']['name']);
	$folder="profile/";
	$rand=mt_rand().mt_rand();
	$files2=$folder.$rand.$file;
	$files3=$rand.$file;
	$move=move_uploaded_file($_FILES['myfile']['tmp_name'],$files2);
	if ($move) {
		$update=mysqli_query($conn,"update  admin set file='$files3' where id='$id'");
	}
}


 ?>