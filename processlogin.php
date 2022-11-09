<?php session_start();
include "db.php";
if (1==1) {
	$email=$_POST['email'];
	$pass=$_POST['password'];

	if ($email=="") {
	echo "email is empty";	
	}
	elseif ($pass=="") {
	echo "email is password";	
	}

	else{

		$admin=mysqli_query($conn," select * from admin where email='$email' and password='$pass'");
		$adminarr=mysqli_fetch_array($admin);
		$adminid=$adminarr['id'];
		$adminums=mysqli_num_rows($admin);

		

		$select=mysqli_query($conn," select * from signup where email='$email' and password='$pass'");
        $arr1=mysqli_fetch_array($select);
		$arr=$arr1['id'];
		$nums=mysqli_num_rows($select);


		if ($adminums>0) {
			$_SESSION['admin']=$adminid;
			echo"	<script type='text/javascript'>
			window.location.href='admin.html'</script>";	
		}

	elseif ($nums>0) {
		$_SESSION['id']=$arr;
			echo"	<script type='text/javascript'>
			window.location.href='homepage.html'</script>";
	}

	else{
		echo"";
	}


	}
}




  ?>