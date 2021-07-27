 

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


    $adhar=$_POST['adhar'];
     $name = $_POST['name'];
     $party=$_POST['party'];

      $sql = "select *from voters where fname = '$name' and adhar = '$adhar'";

      $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        if($row['status']=="voted"){
        	echo "<script type='text/javascript'>alert('you already done it');
window.location='login.html';
</script>";
        	 

        	 

        }
        else{
        	$sql2 = "UPDATE voters SET status='voted' WHERE adhar=$adhar";

        	 

					if (mysqli_query($con, $sql2)) {
 


						       echo "<script type='text/javascript'>alert('you vote submit successfully done it');
									window.location='login.html';
									</script>"; 

						   }
					   
					 else {
					  echo "Error updating record123: " . mysqli_error($conn);
					}







        }

session_destroy();
    

   



?>

