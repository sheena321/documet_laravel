<?php
 $login=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'db.php';
    $email=$_POST['email'];
$password=$_POST['psw'];
$qry="select * from signup where email='$email'and password='$password'";
$result=mysqli_query($cnn_string,$qry);
if(isset($result)){
   $row=mysqli_num_rows($result);
   if($row>0){
        $login=1;
        // echo "logged";
        session_start();
      $_SESSION['email']=$email;
      header('location:home.php');

    }else{
        $login=2;
        // echo "invalid";
    }
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
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <?php
    if($login==1){
        echo '<div class="alert alert-danger" role="alert">
            u r successfully logged in
          </div>';
    }elseif($login==2){
        echo '<div class="alert alert-danger" role="alert">
        u r not a valid user
      </div>'; 
      
    }
    ?>
    <div class="container">
        <h2 class="text-center mt-5">login</h2>
<form action="" method="post">
<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" aria-describedby="emailHelp" name="email">
     </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="psw" >
  </div>
   <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</body>
</html>