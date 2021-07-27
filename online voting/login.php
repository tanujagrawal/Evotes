<?php

        session_start();
        


   $host = "localhost";  
    $user = "root";  
    $password = 'mysql';  
    $db_name = "onnline_voting";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  

        $cast=$_POST['options'];
     $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  

        if($cast=="voter"){
      
        $sql = "select *from voters where email = '$username' and pass = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            $_SESSION['id']=$row['adhar'];
            $_SESSION['name']=$row['fname'];
            header("location: startvote.php");

        }  
        else{  
            echo '<script>alert("check email or pass")</script>';;  
        }  }


        else{


             $sql = "select *from admin where email = '$username' and pass = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  

             
                $_SESSION['id']=$row['adhar'];
            header("location: adminhome.html");  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }  }


        
?>
