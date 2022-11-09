<?php session_start();
include "db.php";
if (1==1) {
	$firstn=$_POST['firstname'];
	$lastn=$_POST['lastname'];
	$email=$_POST['email'];
	$class=$_POST['class'];
	$pass=$_POST['password'];
	$cpass=$_POST['cpassword'];

	if ($firstn=="") {
		echo "firstname is empty";
	}
	else if ($lastn=="") {
		echo "lastname is empty";
	}
	elseif ($email=="") {
	echo " email is empty";
	}
	elseif ($class=="") {
		echo " class is empty";

	}
	elseif ($pass=="") {
		echo "password is empty";
	}
	elseif ($pass!=$cpass) {
		echo "password not match";
	}
	else{
		$insert=mysqli_query($conn," insert into signup(firstname,lastname,email,class,password)
		values('$firstn','$lastn','$email','$class','$email')");
		$lastid=mysqli_insert_id($conn);
		if ($lastid>0) {
			$_SESSION['id']=$lastid;
			echo"	<script type='text/javascript'>
			window.location.href='homepage.html'</script>";
		}
	}

}






 ?>