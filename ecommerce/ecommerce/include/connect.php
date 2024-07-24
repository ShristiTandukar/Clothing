<?php
$conn= mysqli_connect('127.0.0.1','root','','mysql');
if (!$con){
    echo("Connected Sucessfully");
}
    else{
        die(mysqli_error($conn));
    }

?>