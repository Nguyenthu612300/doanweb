<?php require_once './core/boot.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORTUNE</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./view/public/css/style.css">

</head>

<body>

    <?php include 'inc/header.php'; ?>
    <?php include 'inc/navbar.php'; ?>
    <?php include 'inc/banner.php'; ?>






    <!-- sale section starts  -->

    <section class="sale-container">

        <div class="sale">
            <img src="view/public/images/banner1.jpg" alt="">
            <div class="content">
                <span>sale</span>
                <h3>house plants</h3>
                <a href="#" class="btn">shop now</a>
            </div>
        </div>
        <div class="sale">
            <img src="view/public/images/banner2.jpg" alt="">
            <div class="content">
                <span>sale</span>
                <h3>office plants</h3>
                <a href="#" class="btn">shop now</a>
            </div>
        </div>

    </section>

    <!-- sale section ends -->

    <!-- category section starts  -->

    <section class="category" id="category">

        <h1 class="heading"> shop by category </h1> 

        <div class="box-container">
        <?php $product_list = get_all_products() ?>
                <?php foreach ($product_list as $product) { ?>
            <div class="box">
            <a href="product_detail.php?id=<?php echo $product['id'];?>">
              <img class="card-img-top" height="300px" src="<?php echo $product['img'];?>" alt="Product">
            </a>
                <div class="content">
                    <h3><?php echo $product['name'];?></h3>
                    <a href="#" class="btn">shop now</a>
                </div>
            </div>
            <?php } ?>
            

        </div>

    </section>

    <!-- category section ends -->


    <!-- new arrival -->
    <section class="new-arrival" id="new-arrival">

        <h1 class="heading"> shop by new arrival </h1>

        <div class="box-container">
        <!-- Calling Function -->
        <?php $product_list = get_all_products() ?>
                <?php foreach ($product_list as $product) { ?>
            <div class="box">
                <div class="image">
                <a href="product_detail.php?id=<?php echo $product['id'];?>">
              <img class="card-img-top" height="300px" src="<?php echo $product['img'];?>" alt="Product">
            </a>
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="cart-btn">add to cart</a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                
                <div class="content">
                    <h3><?php echo $product['name'];?></h3>
                    <!-- Call the function to get the price -->
                    <div class="price"> $<?php echo $product ['price']?></div>
                </div>
            </div>
            <?php } ?>
            
            
            
        </div>
    </section>


    <!-- new arrival ends -->

    <!-- .icons section starts  -->

    <section class="icons-container">

        <div class="icon">
            <img src="./view/public/images/icon1.png" alt="">
            <div class="content">
                <h3>free shipping</h3>
                <p>Free shipping on order</p>
            </div>
        </div>
        <div class="icon">
            <img src="./view/public/images/icon2.png" alt="">
            <div class="content">
                <h3>100% Money Back</h3>
                <p>You’ve 30 days to Return</p>
            </div>
        </div>
        <div class="icon">
            <img src="./view/public/images/icon3.png" alt="">
            <div class="content">
                <h3>Payment Secure</h3>
                <p>100% secure payment</p>
            </div>
        </div>
        <div class="icon">
            <img src="./view/public/images/icon4.png" alt="">
            <div class="content">
                <h3>Support 24/7</h3>
                <p>Contact us anytime</p>
            </div>
        </div>

    </section>

    <!-- .icons section ends -->

    <!-- deal section starts  -->

    <section class="deal" id="deal">

        <h1 class="heading"> deal of the day </h1>

        <div class="row">

            <div class="content">
                <h3 class="title">don't miss the deal</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae rem eligendi repudiandae
                    pariatur. Aut, esse molestias laborum sunt reprehenderit repellat officiis aspernatur consequatur
                    nemo! Veritatis, ex architecto! Eligendi, iste nulla.</p>

                <a href="#" class="btn">check out deal</a>
            </div>

            <div class="image">
                <img src="./view/public/images/deal-img.jpg" alt="">
            </div>

        </div>

    </section>

    <!-- deal section ends -->

    <!-- review -->

    <section class="review" id="review">

        <h1 class="heading"><span>review</span> </h1>

        <div class="box-container">

            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti asperiores laboriosam praesentium
                    enim maiores? Ad repellat voluptates alias facere repudiandae dolor accusamus enim ut odit, aliquam
                    nesciunt eaque nulla dignissimos.</p>
                <div class="user">
                    <img src="./view/public/images/review-1.png" alt="">
                    <div class="user-info">
                        <h3>john deo</h3>
                        <span>happy customer</span>
                    </div>
                </div>

            </div>

            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti asperiores laboriosam praesentium
                    enim maiores? Ad repellat voluptates alias facere repudiandae dolor accusamus enim ut odit, aliquam
                    nesciunt eaque nulla dignissimos.</p>
                <div class="user">
                    <img src="./view/public/images/review-2.png" alt="">
                    <div class="user-info">
                        <h3>john deo</h3>
                        <span>happy customer</span>
                    </div>
                </div>

            </div>

            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti asperiores laboriosam praesentium
                    enim maiores? Ad repellat voluptates alias facere repudiandae dolor accusamus enim ut odit, aliquam
                    nesciunt eaque nulla dignissimos.</p>
                <div class="user">
                    <img src="./view/public/images/review-3.png" alt="">
                    <div class="user-info">
                        <h3>john deo</h3>
                        <span>happy customer</span>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- review end -->



    <?php include 'inc/footer.php'; ?>


</body>
