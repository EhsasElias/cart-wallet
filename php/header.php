<?php

?>
<!-- <header id="header">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
    <a href="index.php" class="navbar-brand">
        <h3 class="px-5">
            <i class="fa fa-shopping-basket"></i>Shopping Cart
        </h3>
    </a>
</nav>
</header> -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shopping cart & wallet</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">
    

</head>
<body>
<header >
            <nav>
                <div class="svgs">

                    <a id="login">
                        <img src="upload/user.svg" width="20" alt="" class="svg">
                        ادخل لحسابك او سجل الان
                    </a>
                    <a href="index.html">
                        <img src="upload/start.svg" width="20" alt="" class="svg">
                        الرئيسية
                    </a>
                    <a href="">
                        <img src="upload/car.svg" width="20" alt="" class="svg">
                        من نحن
                    </a>
                    <a href="">
                        <span class="fa fa-check-square"></span>
                        اتصل بنا
                    </a>
                    <a href="">
                        <img src="upload/help.svg" width="20" alt="" class="svg">
                        المساعدة
                    </a>
                    <a href="">
                        <img src="upload/location.svg" alt="">
                        سياسة الخصوصية
                    </a>
                    <a class="language">
                        <img src="upload/flag.svg" width="20" alt="" class="svg">
                        <p>اليمن</p>
                        <p>YER</p>
                    </a>
                    <a id="language">
                        English
                        <img src="upload/lan.svg" width="20" alt="" class="svg">
                    </a>
                </div>
            </nav>




            <div class="header-bottom w-100">

                <div class="logo">

                    <a href="index.php"><img src="upload/logo.svg" width="180px" alt=""></a>
                </div>
                <div class="search-div">

                    <a id="menu"><img src="upload/menu.svg" alt=""></a>

                    <input type="search" value="" placeholder="البحث" id="search">
                    <button class="fa fa-search"></button>
                    </button>
                    <a class="fa fa-shopping-cart shopping" id="headerChart" href="cart.php">
                       <?php 
                       if(isset($_SESSION['cart'])){
                           $count = count($_SESSION['cart']);
                           echo '<span class="cart_count text-warning bg-light">'.$count.'</span>';
                       }
                       else{
                        echo '<span class="cart_count text-warning bg-light">0</span>';
                       }
                       ?>
                    </a>
                </div>
            </div>
           
        </header>
