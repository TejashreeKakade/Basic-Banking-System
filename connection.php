<?php

$username = "root";
$password = "Teju@2000";
$server = 'localhost';
$db = 'Bank';

$con = mysqli_connect($server,$username,$password,$db);

if($con){
    //echo "Connection successful";
    ?>

    <script>
        alert('Connection successful');
    </script>


    <?php
}else{
    echo "No Connetion";
}

?>