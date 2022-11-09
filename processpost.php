<?php session_start();
//echo $id=$_SESSION['admin'];
include "db.php";
if (1==1){
$message=$_POST['message'];
$time=time();
$id=$_SESSION['admin'];
if ($message=="" and $_FILES['myfile']=="") {
}
else{
$insert=mysqli_query($conn," insert into post(email,message,time)values('$id','$message','$time')");
 $lastid=mysqli_insert_id($conn);
  if ($lastid>0) {
	if ($_FILES['myfile']=="") {
		
	}
	else{

	foreach ($_FILES['myfile']['name'] as $value => $key) {
			$rand=mt_rand().mt_rand().mt_rand();
			$filename=$_FILES['myfile']['name'][$value];
			$folder="postimage/";
			$mainfile=$folder.$rand.$filename;
			$mainfile2=$rand.$filename;
			//$filetype=$_FILES['myfile'];
			$filetype2=pathinfo($filename,PATHINFO_EXTENSION);
			$filename2=$_FILES['myfile']['tmp_name'][$value];
			if (move_uploaded_file($filename2, $mainfile)) {
			$insert2=mysqli_query($conn," insert into  postimage(imagename,postid,filetype)values('$mainfile2','$lastid','$filetype2')");
			}
		}
	}
	}

       echo "s";	
}



}

 ?>