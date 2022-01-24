<!-- userinfo.php -->
<?php
 $con = mysqli_connect('localhost','root');
 if($con){
     echo"connection successful";
        
    }
 else{
     echo"no connection";
 }

mysqli_select_db($con,'youtubeuserdata');

$user= $_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
 
 
$query = "insert into userdatainfo(user,email,mobile)
values ('$user','$email','$mobile')";
mysqli_query($con,$query);
//  echo "$query";
?>