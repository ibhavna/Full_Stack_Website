<?php

$con = mysqli_connect('localhost','root');
if($con){
    echo "conection succesful" ;
    }else{
        echo "No connection";
    }

mysqli_select_db($con, 'userdata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

$query = "insert into userdata (user, email, mobile, comment) values('$user','$email','$mobile','$comments' )";

echo "$query";
mysqli_query($con,$query);

?>
