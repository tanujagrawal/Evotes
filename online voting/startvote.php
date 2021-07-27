<?php 

    session_start();

    if($_SESSION['id']!=true){
      header("location: login.html");
    }



?>
<!doctype html>
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
     
     
  </div>
</nav>

<div style="height: 380px;background-color: rgb(255, 204, 128);text-align:center;">
      
         <div class="container" style="padding-top: 50px;text-align: center;">
          <form method="post" action="castvote.php">
          <div class="col-md-3 mb-3" style="margin-left:450px">
                <label for="validationTooltip01" style="font-weight: bold;">adhar no.</label>
                <input type="text" class="form-control" id="validationTooltip01" value="<?php echo $_SESSION['id']; ?>" name="adhar"  required>
                <label for="validationTooltip01" style="font-weight: bold;">Name</label>
                <input type="text" class="form-control" id="validationTooltip01" value="<?php echo $_SESSION['name']; ?>" name="name" placeholder="Name" required>
                 <label for="inputState" style="font-weight: bold;">select party Name</label>
                            <select id="inputState" class="form-control" style="font-weight: bold;">
                              <option selected  name="party">Choose... </option>
                              <option value="bjp">bjp</option>
                              <option value="lkm">lkm</option>
                              <option value="cong">COng</option>
                              <option value="aap">AAP</option>
                            </select>
                <button class="btn btn-primary" type="submit" style="margin-top: 30px">submit</button>
                 
              </div>
        </form>


   

</div>
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