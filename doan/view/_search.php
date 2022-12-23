<?php require_once 'core/boot.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./view/public/css/style.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- custom css file link  -->
   

</head>

<body>

    <?php include 'inc/header.php'; ?>
    <?php include 'inc/navbar.php'; ?>
    <?php include 'inc/banner.php'; ?>




    <!-- product -->
    <section class="products" id="products">

        <h1 class="title"> our <span>products</span> <a href="#">view all >></a> </h1>

        <div class="box-container" >

            <div class="box">
                <?php $product_list =get_products_by_name($_GET['search']); ?>
                <?php foreach ($product_list as $product) { ?>
                    <div class="image">
                    <a href="product_detail.php?id=<?php echo $product['id']; ?>"> 
                        <img src="<?php echo $product['img']; ?>" alt="">
                    </a>
                        <div class="icons">
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="cart-btn">add to cart</a>
                            <a href="#" class="fas fa-share"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3><?php echo $product['name']; ?></h3>
                        <div class="price"><?php echo $product['price']; ?></div>
                    </div>
                <?php } ?>
            </div>


    </section>

    <!-- product end -->



    <?php include 'inc/footer.php'; ?>

</body>

</html>