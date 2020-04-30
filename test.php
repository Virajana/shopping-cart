<!DOCTYPE html>
<html>
    <head>
    <?php
$con=mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
//$con=mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
?>
<?php
if(isset($_GET['search'])){
    $searchq = $_GET['search'];
    $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);

    //$quary = mysql_quary("SELECT * FROM items WHERE name LIKE '%$searchq%'") or die ("Could not search!");
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
</head>
        <body>
            <form action="test.php" method="get">
            <input type="text" name="search" placeholder="Serach Items"/>
            <input type="submit" value=">>"/>           
            </form>

        </body>
</html>
