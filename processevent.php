<?php  session_start();
$id=$_SESSION['admin'];
include "db.php";
if (1==1) {
	$tittle=$_POST['tittle'];
	$message=$_POST['message'];
	$time=time();


	if ($tittle=="" and $message=="" ) {
	
	}
	else{
		$insert=mysqli_query($conn,"insert into event(email,tittle,message,time)values('$id','$tittle','$message','$time')");
	     $lastid=mysqli_insert_id($conn);
        
	     if ($lastid>0) {
	     if ($_FILES['eventfile']=="") {
	     	
	     }

	     else{
	     	$rand=mt_rand().mt_rand();
	     	$filename=$_FILES['eventfile']['name'];
	     	$folder="eventpic/";
	     	$mainfile=$folder.$rand.$filename;
	     	$mainfile2=$rand.$filename;
	     	//$filetype=pathinfo($filename,PATHINFO_EXTENSION);
	     	$filename2=$_FILES['eventfile']['tmp_name'];
	     	if (move_uploaded_file($filename2, $mainfile)) {
	     	$insert2=mysqli_query($conn,"insert into eventpic(imagename,postid,time)values('$mainfile2','$lastid','$time')");
	     	
	     	}

	     }
	     }

	    echo "p";
	}
}

 ?>