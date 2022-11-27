<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>
<body>
    <?php
   $id=$_GET['id'];
   $qry="select * from register where id=$id";
    $result=mysqli_query($cnn_string,$qry);
    // print_r($result);
    $row=mysqli_fetch_assoc($result);
    // print_r($row);
    ?>
<form action="" method="post">
<!-- <input type="text" name="email" id=""  placeholder="enter ur email" value=""><br><br> -->
<input type="text" name="name" id=""  placeholder="enter ur name" value="<?php echo $row['name'];?>"><br><br>
<input type="text" name="email" id=""  placeholder="enter ur email" value="<?php echo $row['email'];?>"><br><br>
<input type="text" name="password" id=""  placeholder="enter ur password" value="<?php echo $row['password'];?>"><br><br>
<input type="text" name="phone" id=""  placeholder="enter ur phone" value="<?php echo $row['mobile'];?>"><br><br>
<button type="submit" name="submit">update</button>
</form>
<?php 
if(isset($_POST['submit'])){
    $name_updtd=$_POST['name'];
    $email_updtd=$_POST['email'];
    $psw_updtd=$_POST['password'];
    $phone_updtd=$_POST['phone'];

    $qry1="update register set id=".$id.",name='".$name_updtd."',email='".$email_updtd."',password='".$psw_updtd."',mobile=".$phone_updtd." where id=".$id;
print_r($qry1);
$result1=mysqli_query($cnn_string,$qry1);
    if($result1){
        // echo "updated successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($cnn_string));
    }
}
?>
</body>
</html>