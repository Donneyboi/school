<?php session_start();
include "db.php";
$_SESSION['admin'];

$select=mysqli_query($conn,"select * from event ORDER BY time DESC");
while ($arr=mysqli_fetch_array($select)) {
	  $tittle=$arr['tittle'];
	  $message=$arr['message'];
	  $idx=$arr['id'];



 ?>


         <div class="pdiv">
				<h2><?php echo $tittle;  ?></h2>
			
			<?php  $selectimage=mysqli_query($conn,"select * from eventpic where postid='$idx'");
             $ar=mysqli_fetch_array($selectimage);
             $image=$ar['imagename'];
      echo "<img src='eventpic/$image'>";
			 ?>
			<p><?php echo $message;  ?></p>
			<button type="button" onclick="myf(<?php echo $idx  ;?>)">view</button>
			</div>
			<div class="viewbig<?php echo $idx  ;?>" style="width: 100%; height: 100vh; background: white;
			position: absolute;left: 0px; display: none;
			align-items: center;
			justify-content: center;">
             <i class="fa fa-times" style="position: absolute; top: 0px;left:40px; font-size: 40px;" onclick="myfd(<?php echo $idx  ;?>)"></i>

			<?php  echo "<img src='eventpic/$image' style='width:70%;height:500px;object-fit:cover'>";?></div>

			<?php } ?>
			<script type="text/javascript">
				//$('.viewbig').hide();
				function myf(p){
				$('.viewbig'+p).css({"display":"flex"});
					
				}
			</script>
			<script type="text/javascript">
				//$('.viewbig').hide();
				function myfd(p){
				$('.viewbig'+p).css({"display":"none"});
					
				}
			</script>