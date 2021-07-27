<?php

	 $host = "localhost";  
    $user = "root";  
    $password = 'mysql';  
    $db_name = "onnline_voting";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  


    $fname=$_POST['fname'];

    $lname = $_POST['lname']; 

    $password = $_POST['pass'];

   	$adhar=$_POST['adhar'];

    $image = $_POST['file'];  
    $city = $_POST['city']; 
    $state=$_POST['state'];
     $zip = $_POST['zip'];  
    $email = $_POST['email']; 

    $party=$_POST['party'];

    $gender=$_POST['gender'];

    $sql = "INSERT INTO `candidate`(`fname`, `lname`, `email`, `pass`, `party`, `state`, `city`, `zip_code`, `gender`, `adhar no.`, `image`) VALUES ('$fname', '$lname', '$email','$password','$party','$state','$city','$zip','$gender','$adhar','$image')";
if(mysqli_query($con, $sql)){
    header("location: adminhome.html");
    alert("saved");

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
      




 ?>