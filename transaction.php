<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    
  <!--Bootstrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!--css-->

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <style>

.bg {
  /* The image used */
       background-image: url("Images/background.jpg");

  /* Full height */
       height: 100%;
       width:100%;

  /* Center and scale the image nicely */
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
}
   

      .center {
    margin:auto;
    width: 70%;
    height:60vh;
    background-color:#c8c2bc;
    padding: 20px;
    position:relative;
    top:3rem;
    font-size:1.5rem;
  }

  .nav-link{
    font-size: 1.5rem;
}

  .btn-transact {
      text-align:center;
      padding: 30px;
      
      
  }
  input[type=text] {
  
  padding: 12px 20px;
  margin: 3px 0;
  box-sizing: border-box;
}

h2{
    text-align: center;
    padding-top:40px;
    
}
  </style>
</head>
<body class="bg" >
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">National Bank</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav ml-auto">
            <li class="nav-item"> 
                <a class="nav-link Active" href="index.php"> Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="allcust.php"> AllCustomer</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="history.php">TransactionHistory</a>
            </li>
        </ul>
    </nav>
      <div class="large-div">
          <div class="center" >
             <form action="" method="POST">
              <div class="row g-3">
                   <div class="col-md-6">
                      <label for="inputsender" class="form-label">Sender's Name</label>
                      <input type="text" class="form-control" name="sender" placeholder="Sender's name" aria-label="First name">
                   </div>
                   <div class="col-md-6">
                      <label for="inputReceiver" class="form-label">Receipient's Name</label>
                      <input type="text" class="form-control" name="receipient" placeholder="Receipient's name" aria-label="Last name">
                   </div>
                   <div class="col-md-6">
                      <label for="inputsender" class="form-label">Sender's Account No.</label>
                      <input type="text" class="form-control" name="sender_acc" placeholder="Sender's Account No" aria-label="First name">
                   </div>
                   <div class="col-md-6">
                      <label for="inputReceiver" class="form-label">Receipient's Account No.</label>
                      <input type="text" class="form-control" name="receipient_acc" placeholder="Receipient's Account No." aria-label="Last name">
                   </div>
                   <br>
                   <div class="col-md-9">
                      <label for="inputAmount" class="form-label">Amount</label>
                      <input type="text" class="form-control" name="amount" placeholder="Amount" aria-label="Last name">
                   </div>
                   <div class="btn-transact col-12" >
                       <input type="submit" class="btn btn-dark btn-lg" name="trasact" value="Transact" />
                    </div>             
                 </div>
                 </form>  
          </div>
      </div>
</body>
</html>


<?php 

include 'connection.php'; 

if(isset($_POST['trasact'])){

    $sender = $_POST['sender'];
    $receipient= $_POST['receipient'];
    $senderAcc = $_POST['sender_acc'];
    $receipientAcc = $_POST['receipient_acc'];
    $amount = $_POST['amount'];



    
    include('connection.php');
    $sql= 'select * from customer where idCustomer ="'.$senderAcc.'"';
    echo $con->error;
    $query= mysqli_query($con,$sql);
    $sql1=mysqli_fetch_array($query);
    echo $con->error;
    $sql= 'select * from customer where idCustomer="'.$receipientAcc.'"';
    $query= mysqli_query($con,$sql);
    $sql2=mysqli_fetch_array($query);
    echo $con->error;
    echo $amount;
    echo $con->error;
    echo $sql1['Balance'];
    echo $con->error;
    if(($amount) < 0)
    {
    
            echo '<script type="text/javascript">';
            echo 'alert("negative value cannot be entered")';
            echo '</script>';
    }
    else if(($amount) > $sql1['Balance'])
    {
            echo '<script type="text/javascript">';
            echo 'alert("Insufficient Balance")';
            echo '</script>';
    }
    else{
    
            $new= $sql1['Balance'] - $amount;
            echo $con->error;
            $sql= 'UPDATE customer set Balance= "'.$new.'" where idCustomer="'.$senderAcc.'"';
            mysqli_query($con,$sql);
            $new= $sql2['Balance'] + $amount;
            $sql= 'UPDATE customer set Balance= "'.$new.'" where idCustomer="'.$receipientAcc.'"';
            mysqli_query($con,$sql);

  $insertquery =" INSERT INTO `bank`.`transaction` ( `Sender_Name`, `Receipient_Name`, Sender_Acc_No, Receipient_Acc_No, Amount)
                                            VALUES (' $sender', '$receipient', $senderAcc, $receipientAcc, $amount)";

    $res = mysqli_query($con, $insertquery);                                     

   if($res) {
     
       ?>
            <script>
                   alert("Transaction Suceesful");
            </script>
       <?php
       
  } 
  else {
   
    ?>
    <script>
           alert("Transaction Failed");
    </script>
<?php

  }
 
 
  mysqli_close($con);
  
}
}


?>