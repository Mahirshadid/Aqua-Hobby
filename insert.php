<?php

$server="localhost";
$username="root";
$password="";
$dbname="aquashpdb";

$conn=mysqli_connect($server,$username,$password,$dbname);

if(isset($_POST['submit'])){
    if(!empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['address']) 
      && !empty($_POST['fishname']) && !empty($_POST['quantity'])){
        
        $name = $_POST['name'];
        $phone = $_POST['mobile'];
        $address = $_POST['home'];
        $fishname = $_POST['fname'];
        $quantity = $_POST['fquantity'];
        
        $query="insert into customer(name,mobile,home,fname,fquantity)
        values('$name','$phone','$address','$fishname','$quantity')";
        
        $run=mysqli_query($conn,$query) or die(mysqli_error());
        
        if($run){
            echo "Form submitted successfully";
        }else{
            echo "Form not submitted";
        }
        
    }else{
        echo "All fields are Required";
    }
}

?>