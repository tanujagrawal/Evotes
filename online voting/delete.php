<?php

 $host = "localhost";  
    $user = "root";  
    $password = 'mysql';  
    $db_name = "onnline_voting";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  // Using database connection file here

$id = $_GET['id']; // get id through query string

$query="DELETE FROM voters WHERE adhar = $id";

$del = mysqli_query($con,$query); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:votersdata.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>