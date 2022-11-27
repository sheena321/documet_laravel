<?php
include_once 'db.php';
$qry="select * from register";
$result=mysqli_query($cnn_string,$qry);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>displaying data from php_crud database in xampp</title>
</head>
<body>
    <button><a href="insert.php" >add user</a></button>
    <table border=3>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>password</th>
            <th>phone</th>
            <th colspan='2'>operations</th>
        <?php
        if($result){
            // $row=mysqli_fetch_assoc($result);
        foreach($result as $i){
        // $row=mysqli_fetch_assoc($result);
            // $id=$row['id'];
            // $name=$row['name'];
            // $email=$row['email'];
            // $psw=$row['password'];
            // $ph=$row['mobile'];
             $id=$i['id'];
            $name=$i['name'];
            $email=$i['email'];
            $psw=$i['password'];
            $ph=$i['mobile'];
            echo "<tr><td>".$id."</td>
            <td>".$name."</td>
            <td>".$email."</td>
            <td>".$psw."</td>
            <td>".$ph."</td>
            <td><button><a href='delete.php?id=".$id."'>delete</a></button></td>
            <td><button><a href='update.php?id=".$id."'>update</a></button></td>
            </tr>";
        }
        }
        ?>

    </table>
</body>
</html>