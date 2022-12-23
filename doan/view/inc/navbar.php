<style>
    .text-gray-200{
        font-size: 20px !important;
    }
</style>
<div class="header-3">

    <div id="menu-bar" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="./about.html">about</a>
        <a href="./shop.html">shop</a>
        <a href="./contact.html">contact</a>
        </li>
            <?php if (isset($_SESSION['user'])) { ?>
                <a class="" href="<?php echo BASE_URL . '/admin/product'; ?>" class="text-gray-200 hover:text-white transition">Admin</a>
               
              <?php } ?>
            </li>   
    </nav>

    <div class="icons">
                <a href=""><i class="fa-solid fa-heart"></i></a>
                <a href="./cart.php" class="shopping-cart">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span style="font-size: 15px;"> <?php echo number_cart_product() ?></span>
                </a>
                <?php if (isset($_SESSION['user'])) { ?>
                    <a href="logout.php" class="text-gray-200 hover:text-white transition">Logout</a>
                <?php } else { ?>
                    <a href="login.php" class="text-gray-200 hover:text-white transition  ">Login /</a>
                    <!-- <span class="text-white">/</span> -->
                    <a href="register.php" style="margin: 8px;" class="text-gray-200 hover:text-white transition">Register</a>
                <?php } ?>

       
    </div>

</div>