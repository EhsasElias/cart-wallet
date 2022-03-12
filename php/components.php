<?php
// session_start();

function component($productname, $productprice,$productimg,$product_id){
$element='<div class="col-md-3 col-sm-6 my-md-0">
<form action="index.php" method="post">
    <div class="card">
        <div>
            <img src="'.$productimg.'" alt="" class="img-fluid card-img-top">
        </div>
        <div class="card-body">
            <h5 class="card-title">
                <span>
                    <img src="./upload/book.svg" alt="">
                </span>
                كتاب إلكتروني
            </h5>
            <h6>
                <i class="fa fa-star text-warning"></i>
                <i class="fa fa-star text-warning"></i>
                <i class="fa fa-star text-warning"></i>
                <i class="fa fa-star text-warning"></i>
                <i class="fa fa-star star"></i>
            </h6>
            <p class="card-text">
            '.$productname.'    
            </p>
            <h5>
            <br>
                <span class="price text-danger"> '.$productprice.'ر.س.</span>
            </h5>
            <div class="bookRefer">
            <p>
            <img src="upload/start.svg" width="25" alt="">
            </p>
            <button class="bookReferFont" type"submit" name="add">
            <span class="fa fa-cart-plus"></span>
            </button>
            <input type="hidden" name="product_id" value="'.$product_id.'">
            <p>
            <img src="upload/arrows.svg" width="25" alt="">
            </p>
            </div>
        </div>
    </div>
</form>
</div>';
echo $element;}



function cardElement($productimg,$productname,$productprice,$product_id){
    $element = ' <form action="cart.php?action=remove&id='.$product_id.'" method="post" class="cart-items">
    <div class="border rounded">
        <div class="row bg-white">
            <div class="col-md-3 pr-0">
                <img src="'.$productimg.'" alt="" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h5 class="pt-2">
                    '.$productname.'
                </h5>
                <small class="text-secondary">منتج قابل للخصم لحاملي بطاقةخصم مكتبة جرير</small>
                <h5 class="pt-2">'.$productprice.' ر.س.</h5>
                <button type="submit" class="btn"  name="remove">احذف</button>
            </div>

            <div class="col-md-3 d-flex flex-wrap align-items-center">
                <h5 class="w-100">
                    <span class="price text-danger">'.$productprice.' ر.س.</span>
                </h5>
                <div class="d-flex w-100">
                    <div>
                        <input type="text" value="1" class="form-conrol border" style="width: 35px;height: 56px">
                    </div>
                    <div>
                        <button type="button" class=" bg-light border d-block"><i class="fa fa-plus "></i></button>
                        <button type="button" class=" bg-light border d-block"><i class="fa fa-minus fw-normal"></i></button>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</form>';
echo $element;
}
function login(){
   
    $element='<style>
    body {font-family: Arial, Helvetica, sans-serif;
          direction:rtl}
    form {border: 3px solid #f1f1f1;
          width:50%;
         margin:50px auto;
        padding:15px}
    
    input[type=text], input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }
    
    button {
      background-color: #04AA6D;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    }
    
    button:hover {
      opacity: 0.8;
    }
    
    .cancelbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #f44336;
    }
    
    .imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
    }

    .container {
      padding: 16px;
    }
    
    span.psw {
      float: right;
      padding-top: 16px;
    }
    
    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
      span.psw {
         display: block;
         float: none;
      }
      .cancelbtn {
         width: 100%;
      }
      
      
    }
    </style>
    </head>
    <body>
    
    
    <form action="login.php" method="post">
    
    <h2 style="text-align:center">تسجيل الدخول</h2>
    
      <div class="container">
        <label for="name"><b>الاسم</b></label>
        <input type="hidden" name="id">
        <input type="text" placeholder="ادخل اسمك" name="name" required>
    
        <label for="pass"><b>كلمة السر</b></label>
        <input type="password" placeholder="ادخل الرمز السري" name="pass" required>
          
        <button type="submit" name="login">تسجيل الدخول</button>
        <label>
          <input type="checkbox" checked="checked" name="remember"> تذكرني
        </label>
      </div>
    
     
    </form>
 
    ';
    echo $element;
}

?>
