
<?php require 'conn1.php';?>
<?php require 'conn3.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      
<?php


$sql1="SELECT * FROM city ORDER BY iid DESC LIMIT 1";
$result=mysqli_query($conn3,$sql1);
if($result){
    while($guide=mysqli_fetch_assoc($result)){
        
      
        $ser=$guide['ccity']; 
        echo $ser;
        }
    }

 ?>
 <?php 
$sql="SELECT * FROM guide_info";
$result=mysqli_query($conn1,$sql);


if(mysqli_num_rows($result)>0){
  while($guide=mysqli_fetch_assoc($result)){
    if($guide['g_city']==$ser || $guide['g_dist']==$ser){

  ?>
  <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
  <img src="/w3images/avatar5.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
  <span class="w3-right w3-opacity">16 min</span>
  <h4>Name:<?php echo $guide['g_name'];?></h4><br>
  <h4>City:<?php echo $guide['g_city'];?></h4>
  <h4>District:<?php echo $guide['g_dist'];?></h4>
  <!--<h4>contury:<?php echo $guide['g_istrict'];?></h4>-->
  <h4>Contact:<?php echo $guide['g_contact'];?></h4>
  <h4>Language:<?php echo $guide['g_lan'];?></h4>
  <hr class="w3-clear">
  <p>Information of guide</p>
  <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button> 
  <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button> 
</div> 
<?php
    }
  }
}
?>
</body>
</html>