
<?php

   $host = "localhost";  
    $user = "root";  
    $password = 'mysql';  
    $db_name = "onnline_voting";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  

    $query="SELECT * FROM `voters`"; 
    $result=mysqli_query($con,$query); 
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

  	<div>
  		<img style="width: 100%;height: 210px " src="main.jpg">
  	</div>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
       
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">log out</button>
     
  </div>
</nav>

<div style="height: 380px;background-color:#fff; padding:20px">
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Adhar No.</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

           
  <?php while($rows=mysqli_fetch_assoc($result)) 
    { 
    ?>    

             <tbody>
    <tr>
      <th scope="row"><?php echo $rows['sno']; ?></th>
      <td><?php echo $rows['fname']; ?></td>
      <td><?php echo $rows['lname']; ?></td>
      <td><?php echo $rows['adhar']; ?></td>
      <th scope="col"><a href="delete.php?id=<?php echo $rows['adhar']; ?>"><button type="button" class="btn btn-success"> Delete </button></a></th>
    </tr>


<?php 
               } 
          ?>


        </tbody>
      </table>

</div>




 <div>
            <footer style="background-color: black;color: white;text-align: center;font-weight: bold;">
              bt5115@.com 
            </footer>
          </div>
          
        
        
      

        



      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>