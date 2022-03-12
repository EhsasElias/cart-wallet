<?php

//session
session_start();
require_once('./php/components.php');
require_once('./php/createDb.php');

//createDb object
$database = new CreateDb();

if(isset($_POST['add'])){
    // print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){
      $item_array_id = array_column($_SESSION['cart'],'product_id');
    //   print_r($item_array_id);
      if(in_array($_POST['product_id'],$item_array_id)){
          echo '<script>alert("Product is already added in the cart..!");</script>';
          echo '<script>window.location = "index.php"</script>';
      }
      else{
          $count = count($_SESSION['cart']);
          $item_array = array(
            'product_id' => $_POST['product_id']
        );
        $_SESSION['cart'][$count] = $item_array;
        // print_r($_SESSION['cart']);

      }
    }
    else{
       $item_array = array(
           'product_id' => $_POST['product_id']
       ); 

       //crreate session
       $_SESSION['cart'][0] =$item_array;
      
    }
}

?>
<!DOCTYPE html>
<html lang="en">





<?php  require_once("php/header.php") ?>
    <div class="container">
        <div class="row text-center py-5">
            <?php 
           $result = $database ->getBookData();
           while($row = mysqli_fetch_assoc($result)){
               component($row['product_name'],$row['product_price'],$row['product_image'],$row['id']);
           }
?>
          

        </div>
    </div>

    
</body>

</html>