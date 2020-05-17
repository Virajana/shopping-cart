<?php
session_start();
require 'check_if_added.php';
?>
<?php
if(isset($_POST['search'])){
  $searchq = $_POST['search'];
  $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);

  $quary = mysql_quary("SELECT * FROM items WHERE name LIKE '%$searchq%'") or die ("Could not search!");
  $count = mysqli_num_rows($query);
  
  if($count == 0){
    $output = "There was no search results!";

  }else{

    while ($row = mysqli_fetch_array($query)) {

      $id= $row ['id'];
      $name = $row ['name'];
      $price = $row ['price'];
      

      $output .='<div> '.$id.''.$name.''.$price.'</div>';
      print ("$output"); 
    }

  }
}
?>
<body>
	<?php include 'header.php';?>

  <div class="container">
   <div class="row">
     <div class="col">
       <div class="card" style="width: 13rem;">
        <img class="card-img-top" src="img/cannon_eos.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Cannon EOS</h5>
          <p class="card-text">Price: Rs. 36000.00.</p>
          <?php if(!isset($_SESSION['email'])){  ?>
            <p><a href="login.php" role="button" class="btn btn-primary">Buy Now</a></p>
            <?php
          }
          else{
            if(check_if_added_to_cart(1)){
              echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
            }else{
              ?>
              <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-primary">Add to cart</a>
              <?php
            }
          }
          ?>
          
        </div>
      </div>
    </div>
    <div class="col">
     <div class="card" style="width: 13rem;">
      <img class="card-img-top" src="img/cannon_eos.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Cannon EOS</h5>
        <p class="card-text">Price: Rs. 36000.00.</p>
        <?php if(!isset($_SESSION['email'])){  ?>
          <p><a href="login.php" role="button" class="btn btn-primary">Buy Now</a></p>
          <?php
        }
        else{
          if(check_if_added_to_cart(2)){
            echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
          }else{
            ?>
            <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
            <?php
          }
        }
        ?>
        
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card" style="width: 13rem;">
      <img class="card-img-top" src="img/cannon_eos.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Cannon EOS</h5>
        <p class="card-text">Price: Rs. 36000.00.</p>
        <?php if(!isset($_SESSION['email'])){  ?>
          <p><a href="login.php" role="button" class="btn btn-primary">Buy Now</a></p>
          <?php
        }
        else{
          if(check_if_added_to_cart(3)){
            echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
          }else{
            ?>
            <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
            <?php
          }
        }
        ?>
        
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card" style="width: 13rem;">
      <img class="card-img-top" src="img/cannon_eos.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Cannon EOS</h5>
        <p class="card-text">Price: Rs. 36000.00.</p>
        <?php if(!isset($_SESSION['email'])){  ?>
          <p><a href="login.php" role="button" class="btn btn-primary">Buy Now</a></p>
          <?php
        }
        else{
          if(check_if_added_to_cart(4)){
            echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
          }else{
            ?>
            <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
            <?php
          }
        }
        ?>
        
      </div>
    </div>
  </div>
  
  <div class="col">
    <div class="card" style="width: 13rem;">
      <img class="card-img-top" src="img/cannon_eos.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Cannon EOS</h5>
        <p class="card-text">Price: Rs. 36000.00.</p>
        <?php if(!isset($_SESSION['email'])){  ?>
          <p><a href="login.php" role="button" class="btn btn-primary">Buy Now</a></p>
          <?php
        }
        else{
          if(check_if_added_to_cart(1)){
            echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
          }else{
            ?>
            <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
            <?php
          }
        }
        ?>
        
      </div>
    </div>
  </div>

  <div class="card" style="width: 13rem;">
    <img class="card-img-top" src="img/cannon_eos.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Cannon EOS</h5>
      <p class="card-text">Price: Rs. 36000.00.</p>
      <?php if(!isset($_SESSION['email'])){  ?>
        <p><a href="login.php" role="button" class="btn btn-primary">Buy Now</a></p>
        <?php
      }
      else{
        if(check_if_added_to_cart(1)){
          echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
        }else{
          ?>
          <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
          <?php
        }
      }
      ?>
      
    </div>
  </div>
  <div class="card" style="width: 13rem;">
    <img class="card-img-top" src="img/cannon_eos.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Cannon EOS</h5>
      <p class="card-text">Price: Rs. 36000.00.</p>
      <?php if(!isset($_SESSION['email'])){  ?>
        <p><a href="login.php" role="button" class="btn btn-primary">Buy Now</a></p>
        <?php
      }
      else{
        if(check_if_added_to_cart(1)){
          echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
        }else{
          ?>
          <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
          <?php
        }
      }
      ?>
      
    </div>
  </div>
  <div class="card" style="width: 13rem;">
    <img class="card-img-top" src="img/cannon_eos.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Cannon EOS</h5>
      <p class="card-text">Price: Rs. 36000.00.</p>
      <?php if(!isset($_SESSION['email'])){  ?>
        <p><a href="login.php" role="button" class="btn btn-primary">Buy Now</a></p>
        <?php
      }
      else{
        if(check_if_added_to_cart(1)){
          echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
        }else{
          ?>
          <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
          <?php
        }
      }
      ?>
      
    </div>
  </div>
  <div class="card" style="width: 13rem;">
    <img class="card-img-top" src="img/cannon_eos.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Cannon EOS</h5>
      <p class="card-text">Price: Rs. 36000.00.</p>
      <?php if(!isset($_SESSION['email'])){  ?>
        <p><a href="login.php" role="button" class="btn btn-primary">Buy Now</a></p>
        <?php
      }
      else{
        if(check_if_added_to_cart(1)){
          echo '<a href="#" class=btn btn-primary btn-lg disabled>Added to cart</a>';
        }else{
          ?>
          <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
          <?php
        }
      }
      ?>
      
    </div>
  </div>
</div>
</div>

<?php include 'footer.php';?>               

</body>
</html>