<?php session_start();
include "db.php";
$select=mysqli_query($conn, " select * from post ORDER BY time DESC");
while ($arr=mysqli_fetch_array($select)) {
 $message=$arr['message'];
 $idx=$arr['id'];
 $email=$arr['email'];  


$select3=mysqli_query($conn,"select * from admin where 1 ");
$ra=mysqli_fetch_array($select3);
$firstn=$ra['firstname'];
$lastn=$ra['lastname'];
$file=$ra['file'];




  ?>




          <div class="forpost">
					<div class="posthead">
						<?php echo "<img src='profile/$file'>" ?>
					
						<h2><?php echo $firstn." ".$lastn; ?></h2>
					</div>
					<div class="fortextandphoto">
						<div class="fortext"><?php  echo  $message  ; ?></div>
						<div class="forimage">
							<?php 

							$slecty=mysqli_query($conn, "select * from  postimage where postid='$idx' order by id desc");
							$image=mysqli_fetch_array($slecty);
							$mainimage=$image['imagename'];
							$filetype=$image['filetype'];
						
							if ($filetype=="mp4") {
							echo "<video controls>
  	                          <source src='postimage/$mainimage' type='video/mp4'>
                                     </video>";
							} 
							else if ($filetype=="mp3"){
							echo "<audio controls>
	                    <source src='postimage/$mainimage'>
                                    </audio>";	
							}
							else{
                                 echo"<img src='postimage/$mainimage'>";
							}


							 ?>
							
						</div>
					</div>
				</div>

				<?php } ?>