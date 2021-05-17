<?php
  include 'connection.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NationalBank</title>
    
    <!--font awesome-->
  <script src="https://kit.fontawesome.com/1c9ad4b785.js" crossorigin="anonymous"></script>

  <!--Bootstrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!--css-->
  <link rel="stylesheet" href="css/styles.css">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
</head>
<style>
  body{
    background-image: url(Images/bg2.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}
.link1 {
  color: black;
}
</style>
<body class="bg">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">National Bank</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"> 
                <a class="nav-link Active" href="index.html"> Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="allcust.php"> AllCustomer</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="history.php">TransactionHistory</a>
        </li>
        </ul>
    </nav>

       <section id="homepage">   
         <div class="row">
        <div class="col-lg-6 tagline">
          <h1>Smart Banking for the Good Life.. </h1>
          <button type="button" class="btn  btn-lg transfer-button">
            <a class="link1" href="transaction.php"> Transfer Money </a></button>
          
        </div>
        <div class="col-lg-6">
         
        </div>
      </div>
    </div>
</section>

</body>
</html>