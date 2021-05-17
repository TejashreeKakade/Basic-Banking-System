
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
       
    <!--Bootstrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!--css-->
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
.nav-link{
    font-size: 1.5rem;
}

.center {
    margin:auto;
    width: 70%;
    height:70vh;
    background-color:#c8c2bc;
    padding: 10px;
    position:relative;
    top:2.5rem;
    font-size:1.5rem;
  }
  
  table{
      border-collapse: collapse;
      background-color: white;
      box-shadow: 0 10px 20px 0 rgba(0,0,0,.03);
      border-radius: 10px;
      margin: auto;
      width:90%;
      margin-top:3rem;
  }

  th,td{
    border: 1px solid #f2f2f2;
    padding: 8px 30px;
    text-align: center;
    color: Black;
}
th{
    
    font-weight: 500;
}

td{
    font-size: 17px;
}
 
h2{
    text-align: center;
    padding-top:40px;
    
}


.transfer-button{
    margin-top:15px;
  background: #faf1e6;
  background-image: -webkit-linear-gradient(top, #faf1e6, #f5abc9);
  background-image: -moz-linear-gradient(top, #faf1e6, #f5abc9);
  background-image: -ms-linear-gradient(top, #faf1e6, #f5abc9);
  background-image: -o-linear-gradient(top, #faf1e6, #f5abc9);
  background-image: linear-gradient(to bottom, #faf1e6, #f5abc9);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;

}

.transfer-button:hover {
  background: #f5abc9;
  background-image: -webkit-linear-gradient(top, #f5abc9, #f0f3f5);
  background-image: -moz-linear-gradient(top, #f5abc9, #f0f3f5);
  background-image: -ms-linear-gradient(top, #f5abc9, #f0f3f5);
  background-image: -o-linear-gradient(top, #f5abc9, #f0f3f5);
  background-image: linear-gradient(to bottom, #f5abc9, #f0f3f5);
  text-decoration: none;
}
.div-btn{
    text-align:center;
    margin-top:29px;
}
.link1 {
  color: black;
}
  </style>
 
</head>
<body class=bg>
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
                <a class="nav-link Active" href="history.php">TransactionHistory</a>
            </li>
        </ul>
    </nav>
    
<div class="main-div">
     
           <h2>Transation History</h2>
     
   <div class="center">
        <div class="table-responsive">

      <table>
         <thead>
          <tr>
            <th>Id</th>
            <th>Sender's Name</th>
            <th>Receipient's Name</th>
            <th>Sender's Account No.</th>
            <th>Receipient's Account No.</th>
            <th>Amount</th>
            
          </tr>
         </thead>
         
         <tbody>

         <?php

             include 'connection.php';

             $selectquery = " select * from transaction ";

             $query = mysqli_query($con,$selectquery);

             $nums = mysqli_num_rows($query);


             while($res = mysqli_fetch_array($query)){

           ?>       

                  
                   <tr>
                      <td><?php  echo $res['Id']; ?></td>
                      <td><?php  echo $res['Sender_Name']; ?></td>
                      <td><?php  echo $res['Receipient_Name']; ?></td>
                      <td><?php  echo $res['Sender_Acc_No']; ?></td>
                      <td><?php  echo $res['Receipient_Acc_No']; ?></td>
                      <td><?php  echo $res['Amount']; ?></td>
                   </tr>
          <?php         
                }

            ?>

         </tbody>
      </table>
    
    </div>
 </div> 
</div>  

<div class="div-btn">
    <button type="button" class="btn  btn-lg transfer-button">
            <a class="link1" href="transaction.php"> Transfer Money </a></button>  
            </div>         
</body>
</html> 