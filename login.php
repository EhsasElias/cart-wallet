<?php
// require_once('php/header.php');
session_start();
require_once('php/createDb.php');
require_once('php/components.php');
$db = new CreateDb("Elib","users");



    if(true){
       
   echo($db->getBookData());
 
    $jsqla = $db->getBookData();

    $jfeta = mysqli_fetch_assoc($jsqla);

    // session_start();
    $id = $jfeta['id'];
    $_SESSION['id'] = $id;
    print_r($_SESSION['id']);

//    $id = array_column($_SESSION['login'],'product_id');
//    $result = $db->getBookData();
//    while($row = mysqli_fetch_assoc($result)){
//        foreach($product_id as $id){
//            if($row['id'] == $id){
//                cardElement($row['product_image'],$row['product_name'],$row['product_price'],$row['id']);
//                $total = $total + (float)$row['product_price'];

//            }
//        }
//    }
                    
    }



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>تسجيل الدخول</title>

</head>

<body class="">
<?php login(); ?>
</body>

</html>