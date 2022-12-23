<?php require_once './core/boot.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./view/public/css/style.css">
    <link rel="stylesheet" href="./view/public/css/produc_deail.css">
    <link rel="stylesheet" href="./view/public/css/product_detail.css">


    <!-- font awesome cdn link  -->


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   

</head>

<body>
    <style>
        .display-flex {
            display: flex;
        }

        .reviewss i {
            font-size: 20px;
            margin-top: 10px;
        }

        .reviewss p {
            font-size: 25px;
            margin-top: 10px;
        }

        .butt {
            margin-top: 30px;
            height: 80px;
        }

        .butt button {
            font-size: 15px;
        }

        .add {
            min-height: 60px;
            min-width: 200px;
            border-radius: 10px;

        }


        .cart {
            margin-top: 40px;
        }

        .texttt {
            margin-left: 150px;
            margin-top: 60px;


        }

        .min {
            font-size: 50px;
        }

        .text-t {
            text-align: center;
            font-size: 15px;
            width: 90px;
        }
        .container-fluid{

            width: 100%;
        }
        .btnn{
            color:#fff;
            background-color: #3A9943;
        }
        .icon{
            color: yellow;
        }
    </style>
    <?php include 'inc/header.php'; ?>
    <?php include 'inc/navbar.php'; ?>
    <!--view-->
    <div class="container-fluid">
        <?php $product = get_product($_GET['id']); ?>
        <div class="product-detail">
            <div class="product-detail-left">
                <div class="product-detail-img">
                    <img src="<?php echo $product['img']; ?>" alt="">
                </div>
                <div class="product-detail-img-small">
                    <img src="<?php echo $product['img']; ?>" alt="">
                    <img src="<?php echo $product['img']; ?>" alt="">
                    <img src="<?php echo $product['img']; ?>" alt="">
                    <img src="<?php echo $product['img']; ?>" alt="">
                </div>
            </div>
            <div class="product-detail-right">
                <div class="title">
                    <h3>
                        <?php echo $product['name']; ?>
                    </h3>
                </div>
                <div class="icon-view">
                    <div class="icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <div class="view">
                        240 review
                    </div>
                </div>
                <div class="product-detail-price">
                    <div class="price-new">
                        <strong>$<small><?php echo $product['price']; ?></small></strong>
                    </div>
                    <div class="price-old">
                        <strong><small>$40.000</small></strong>
                    </div>
                </div>
                <div class="product-detail-quantity">
                    <h3 class="title-quantity">quantity</h3>
                    <button class="addd">+</button>
                    <input type="text" value="1">
                    <button class="minus">-</button>

                </div>
                <form action="cart.php" method="post">
                    <input type="hidden" name="action" value="create">
                    <input type="hidden" name="productId" value="<?php echo $product['id']; ?>">
                    <input type="hidden" name="quantity" value="1">
                    <div class="add-to-card">
                        <button class="btnn" type="submit">add to cart</button>
                    </div>

            </div>


        </div>

        <!-- <div class="col-md-6">
                            <a href="#" class="custom-btn">Buy Now <i class="fas fa-angle-right"></i></a>
                        </div> -->
    </div>


    


    <?php include 'inc/footer.php'; ?>

</body>

</html>