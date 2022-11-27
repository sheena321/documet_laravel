<?php
include ('db.php');
if(isset($_POST['submit'])){  //isset function check the button click is true then following works
    $nm=$_POST['name'];  //inside POST['name of the textbox']
    $em=$_POST['email'];
    $psw=$_POST['password'];
    $ph=$_POST['phone'];
    $qry="insert into register(name,email,password,mobile) values('$nm','$em','$psw','$ph')";
    $execut_qry_result=mysqli_query($cnn_string,$qry);
    if(isset($execut_qry_result)){
        echo "inserted";
    }

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><h2>registration</h2>
<form action="" method="post">
<input type="text" name="name" id=""  placeholder="enter ur name"><br><br>
<input type="text" name="email" id=""  placeholder="enter ur email"><br><br>
<input type="text" name="password" id=""  placeholder="enter ur password"><br><br>
<input type="text" name="phone" id=""  placeholder="enter ur phone"><br><br>
<button type="submit" name="submit">submit</button>
</form>
    
</body>
</html>