<!DOCTYPE html>
<html>
    <head>
<?php
      $mysqli = new mysqli("localhost","root","","store") or die("not connected");

  
              $output = '';  
              if(isset($_POST['search'])){
                $searchq = $_POST['search'];
                $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);

                $query = mysqli_query($mysqli,"SELECT * FROM items WHERE name LIKE '%$searchq%' OR price LIKE '%$searchq%'") or die ("Could not search!");
                $count = mysqli_num_rows($query);
                
                if($count == 0){
                  $output = "There was no search results!";

                }else{

                  while ($row = mysqli_fetch_array($query)) {

                    $id= $row ['id'];
                    $name = $row ['name'];
                    $price = $row ['price'];
                  

                    $output .='<div> '.$id.''.$name.''.$price.'</div>';
                    
                  }

    }
  }
?>
</head>
        <body>
            <form action="" method="post">
            <input type="text" name="search" placeholder="Serach Items"/>
            <input type="submit" value=">>"/>

            <?php echo("$output"); ?>          
            </form>

        </body>
</html>
