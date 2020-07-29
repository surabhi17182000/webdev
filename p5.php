<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>BSerene</title>
    <style>
    .carousel-inner{
        width:80%;
        height:500px;
        margin-left:130px;
        padding: 10px;
        padding bottom :10px;
    
    }
        .form-row{
            width: 80%;
            align-content: center;
            margin: auto;
        }
        .services{
            margin-left: 200px;
        }
        .abc{
            margin-left: 600px;
            margin-top: -300px;
        }
       
        }
      </style>  
  </head>
  <body>

      
      
<!--insert w3school cpy -->

      <?php
if(isset($_POST['user_submit']))
{
$servername = "localhost";
$username = root;
$password = "";
$dbname = "userdetails";
    
$emailid=$_POST['emailid'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$phno=$_POST['phno'];
$date=$_POST['date'];
$address=$_POST['address'];



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO subscriberdetails( emailid,firstname, lasttname, phno, date, address)
VALUES ( '$emailid','$first_name', '$last_name','$phno','$date','$address')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} 
else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }




    
    echo 'submitted';
    
    $emailid=$_POST['emailid'];
    echo  $emailid;
        
    $first_name=$_POST['first_name'];
    echo $first_name;
    
    $last_name=$_POST['last_name'];
     echo $last_name;
  
    $phno=$_POST['phno'];
      echo $phno;

    $date=$_POST['date'];
    echo  $date;
    
    $address=$_POST['address'];
    echo $address;
    
}
else{
    echo 'not sumitted';
} ?> 
    

      
      
      
      
      
      
<!--navbar-->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">BSerene</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Veiw booking</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">reviews</a>
        </li>
      <li class="nav-item">
        <a class="nav-link" href="#">logout</a>
        </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


      
      <feildset>
   <h1 style="color: red;"><center>ENTER DETAILS</center></h1>            
               
            <!--form-->
          
<form method="post" action="#">
  <div class="form-row">
    <div class="col">
        <label for="firstname" ><b>First name:</b> </label>
      <input type="text" class="form-control" placeholder="First name" name="first_name" >
    </div>
    <div class="col">
          <label for="lastname" ><b>Last name:</b> </label>
      <input type="text" class="form-control" placeholder="Last name" name="last_name">
    </div>
  </div>
</form>
      
      <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" name="emailid">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4">
    </div>
  </div>
  <div class="form-row">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
  </div>
  <div class="form-row">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
          
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div><br>
</form>
          <form action=""methods="">
              <div class="services">
    <b >SERVICES NEEDED</b></br></br>

<input type="checkbox" name="" checked="checked" > saloon</style></br></br>
<input type="checkbox" name="" checked="checked" > hair styling</br></br>
<input type="checkbox" name="" checked="checked " > disinfection and sanitaization</br></br>
<input type="checkbox" name="" checked="checked"  > electricians</br></br>
<input type="checkbox" name="" checked="checked" > fitness and meditation</br></br>
<input type="checkbox" name="" checked="checked" > home cleaning</br></br>
<input type="checkbox" name="" checked="checked"> pet services</br></br>
<input type="checkbox" name="" checked="checked" > dry cleaning</br></br></div>

<div class="abc">
<label for="date" ><b>DATE:</b></label>
<input type="date" name="date">date
    </br></br><label for="phone no"><b>CONTACT NUMBER:</b></label>
        <input type="text" name="phno">
<</br></br>
  <center> <a href="submit"><button disable="disabled"  name="user_submit">SUBMIT</button></a></center>

</div>
</form>



   </feildset>   
      
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>