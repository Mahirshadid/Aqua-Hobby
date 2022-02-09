<?php

$error='';
if(isset($_POST['delete'])){
    
    $mob=$_POST['mob'];

    $conn=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($conn, "aquashopdb");
    $query=mysqli_query($conn, " delete from customer where mobile='$mob' ");
    
    mysqli_close($conn);
    
}

?>