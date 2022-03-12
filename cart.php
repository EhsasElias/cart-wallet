<?php 
session_start();
require_once('php/createDb.php');
require_once('php/components.php');
$db = new CreateDb();

if(isset($_POST['remove'])){
    if($_GET['action'] == 'remove'){
        foreach($_SESSION['cart'] as $key => $value){
            if($value["product_id"] == $_GET['id']){
                unset($_SESSION['cart'][$key]);
                echo '<script>alert(تم حذف المنتج بنجاح);</script>';
                echo '<script>window.location = "cart.php";</script>';
            }
        }
    }
}
if(isset($_POST['check']))
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">
    <title>cart</title>
</head>

<body >
    <?php require_once('php/header.php'); ?>

    <div class="container-fluid">
        <div class="row px-5">
            <div class="col-md-7">
                <div class="shopping-card">
                    <h5><i class="fa fa-shopping-cart px-2"></i>السلة
                    <?php if(isset($_SESSION['cart'])){
                                $count = count($_SESSION['cart']);
                                echo "<small>($count منتجات)</small>";

                            }
                            else{
                                echo "<small>(0 منتجات)</small>";
                            }
                            ?>
                </h5>
                   <?php 
                   $total = 0;
                 if(isset($_SESSION['cart'])){
                    $product_id = array_column($_SESSION['cart'],'product_id');
                    $result = $db->getBookData();
                    while($row = mysqli_fetch_assoc($result)){
                        foreach($product_id as $id){
                            if($row['id'] == $id){
                                cardElement($row['product_image'],$row['product_name'],$row['product_price'],$row['id']);
                                $total = $total + (float)$row['product_price'];

                            }
                        }
                    }
                 }
                 else{
                     echo '<h5>السلة فارغة</h5>';
                 }
                   ?>
                   
                </div>
            </div>
            <form method="get" action="login.php" class="col-md-4 offset-md-1 border rounded mx-auto mt-5 bg-white h-25">
                <div class="pt-4">
                   
                    <div class="row price-details">
                        <div class="col-md-6">

                        <h6>المجموع</h6>
                            <h6>تكاليف الشحن</h6>
                           
                            <h5><span class="text-danger">
                                المجموع الكلي
                            
                            </span>
                        <samll style="color:gray;font-size:10px">شامل الضريبة</samll>
                        </h5>
                        </div>
                        <div class="col-md-6">
                            <h6 class="text-center">
                                <?php echo $total.'ر.س.';?>
                            </h6>
                            <h6 class="text-success text-center">
                                مجاني
                            </h6>
                            <h6 class="text-danger text-center">
                            <?php 
                            echo $total;
                            ?>
                            ر.س.
                            </h6>
                        </div>
                    </div>
                    <div>
                        <br>
                        <br>
                        <br>
                        <br>
                    <samll style="color:gray;font-size:12px">بالضغط على "انهاء التسوق" فانت توافق على 
                <span class="text-info">الشروط و الأحكام و سياسة الخصوصية</span>
                </samll>
                    </div>
                <a href="login.php" class="btn btn-danger text-white w-100 my-3">انهاء السوق</a>

                </div>
            </form>
        </div>
    </div>

</body>

</html>