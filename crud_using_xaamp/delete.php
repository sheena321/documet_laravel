<?php
include 'db.php'
?>
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
    $id=$_GET['id'];
    $qry="delete from register where id=".$id;
    $result=mysqli_query($cnn_string,$qry);
    if($result){
        // echo "deleted successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($cnn_string));
    }
    ?>
</body>
</html>