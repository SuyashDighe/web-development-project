<?php require 'conn1.php'; ?>
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


$sql="SELECT * FROM guide_info";
$result=mysqli_query($conn1,$sql);
if(mysqli_num_rows($result)>0){
    while($guide=mysqli_fetch_assoc($result)){
        
        if($guide['g_city']=='sinnar'){
            echo $guide['g_id'];
        }
        if($guide['g_dist']=='BARAMATI'){
            echo $guide['g_id'];
        }
    }
}
    ?>
</body>
</html>