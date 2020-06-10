<?php
    require 'connection.php';
    session_start();
        $p_name=$_POST['p_name'];
        $price=$_POST['price'];

        $dashboard_query="insert into items(name,price) values ('$p_name','$price')";
        //die($user_registration_query);
        $dashboard_result=mysqli_query($con,$dashboard_query) or die(mysqli_error($con));
        echo "Success";
        header('location:admin_dashboard.php');

?>
      
    
    
