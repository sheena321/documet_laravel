<?php
$r=0;
$row=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'db.php';
$email=$_POST['email'];
$password=$_POST['psw'];
$qry="select * from signup where email='$email'";
echo $qry;
$result1=mysqli_query($cnn_string,$qry); 
if(isset($result1)){
    $row=mysqli_num_rows($result1);//return the no of rows
    print($row) ;
    if($row>0){
        $r=1;
    }else{
            $r=2;
            $sqlqry="insert into signup(email,password) values('$email','$password')";
            $result =mysqli_query($cnn_string,$sqlqry);
            
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
        if($r==1){// here we cant access the values of variable which is assained from input control 
            echo '<div class="alert alert-danger" role="alert">
            user already exist
          </div>';
        }elseif($r==2){
                echo '<div class="alert alert-success" role="alert">
                data inserted successfully
              </div>';
           }   
        
        ?>
    <div class="container  mt-5 ">
        <h1 class ="text-center">signup</h1>
        
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