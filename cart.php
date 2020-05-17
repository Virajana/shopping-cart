    <?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location: login.php');
    }
    $user_id=$_SESSION['id'];
    $user_products_query="select it.id,it.name,it.price from users_items ut inner join items it on it.id=ut.item_id where ut.user_id='$user_id'";
    $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
    $no_of_user_products= mysqli_num_rows($user_products_result);
    $sum=0;
    if($no_of_user_products==0){
            //echo "Add items to cart first.";
        ?>
        <script>
          <div class="alert alert-primary" role="alert">
          window.alert("No items in the cart!!");
          </div>
      </script>
      <?php
  }else{
    while($row=mysqli_fetch_array($user_products_result)){
        $sum=$sum+$row['price']; 
    }
}
?>
<!DOCTYPE html>
<html>
<head><link rel="shortcut icon" href="img/footer-logo.jpg" />
    <title>HelloCart</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">        
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link src="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'header.php';?>
    <br><br>
    <div class="container">
        <table class="table table-hover table-dark">
            <thead>
                <tr>
                  <th scope="col">Item Number</th>
                  <th scope="col">Item Name</th>
                  <th scope="col">Price</th>
                  <th scope="col"></th>
              </tr>
          </thead>
          <tbody>
           <?php 
                $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
                $no_of_user_products= mysqli_num_rows($user_products_result);
                $counter=1;
                while($row=mysqli_fetch_array($user_products_result)){

                   ?>
                   <tr>
                    <th><?php echo $counter ?></th><th><?php echo $row['name']?></th><th><?php echo $row['price']?></th>
                    <th><a href='cart_remove.php?id=<?php echo $row['id'] ?>'>Remove</a></th>
                </tr>
                <?php $counter=$counter+1;}?>
                <tr>
                    <th></th><th>Total</th><th>Rs <?php echo $sum;?>/-</th><th><a href="success.php?id=<?php echo $user_id?>" class="btn btn-primary">Confirm Order</a></th>
                </tr>
            </tbody>
           </table>
         </div>
        <br>
     <?php include 'footer.php';?>
    </body>
</html>