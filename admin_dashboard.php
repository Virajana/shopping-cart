<?php
    require 'connection.php';
    session_start();
    $sess = $_SESSION['name'];

    if($sess !== 'Admin'){
    header("location: login.php");
    exit();
    }
    //if(isset($_SESSION['name']) && $_SESSION['name'] == 'Admin'){
    //if(isset($_SESSION['name'=='Admin']))
    //header('location:admin_dashboard.php');
       
?>     <div>
            <?php
                require 'header.php';
            ?>
            <br><br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4">
                        <h1><b>Admin Dashboard</b></h1>
                        <h4><b>Product Add</b></h4>
                        <form method="post" action="dashboard_script.php">
                            <div class="form-group">
                                <input type="text" class="form-control" name="p_name" placeholder="Product Name" required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="price" placeholder="Product Price" required="true">
                            </div> 
                          <!--  <div class="form-group">
                                <input type="text" class="form-control" name="price" placeholder="Product Price" required="true">
                            </div>-->                            
                            <div class="form-group">
                                
                        <input type="submit" class="btn btn-primary" value="Add" button onclick="myFunction()">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br><br>
            <?php
                require 'footer.php';
            ?>
        </div>
    </body>
</html>
<script>
function myFunction() {
  alert("Item Added Succufully!");
}
</script>
