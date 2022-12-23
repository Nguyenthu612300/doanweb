<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>


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
  <style>
    .none{
      width: 25px;
      min-height: 17px;
      background-color:#fff;
      border: 1px solid #ccc;
    }
    .minus{
      display: flex;
      margin-left: 30%;
    }
    .number{
      padding: 0px 10px;
    }
    
  </style>

  <!-- cart -->
  <section id="cart-container">

    <table width="100%">
      <thead>
        <td>Image</td>
        <td>Product</td>
        <td>Price</td>
        <td>Quantity</td>
        <td>Tatol</td>
        <td>Remove</td>
      </thead>
      <tbody>
        <?php $cart_list = get_cart() ?>
        <?php foreach ($cart_list as $order_detail) { ?>
           <tr>
            <td><img src="<?php echo $order_detail['img']; ?>" alt=""></td>
            <td>
              <?php echo $order_detail['name']; ?>
            </td>
            <td>
              <h5>$<?php echo $order_detail['price']; ?></h5>
            </td>
            <td>
              <div class="minus">
                <form  action="cart.php" method="post" class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none">
                  <input type="hidden" name="action" value="update">
                  <input type="hidden" name="value" value="-1">
                  <input type="hidden" name="productId" value="<?php echo $order_detail['product_id']; ?>">
                  <button class="none" type="submit">-</button>
                </form>
                <div class="number">
                  <?php echo $order_detail['quantity']; ?>
                </div>
                <form action="cart.php" method="post" class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none">
                  <input type="hidden" name="action" value="update">
                  <input type="hidden" name="value" value="1">
                  <input type="hidden" name="productId" value="<?php echo $order_detail['product_id']; ?>">
                  <button class="none" type="submit">+</button>
                </form>
                </div>
              <!-- <input class="w-25 pl-1" value="1" type="number"> -->
            </td>
            <td>
              <h5>$<?php echo total_cart_item($order_detail['price'], $order_detail['quantity']); ?></h5>
            </td>
            <td>
              <form action="cart.php" method="post">
                <input type="hidden" name="action" value="delete">
                <input type="hidden" name="productId" value="<?php echo $order_detail['product_id']; ?>">
                <button type="submit" class="fas fa-trash"></button>
              </form>
            </td>
          </tr>
        
        <?php } ?>
      </tbody>
    </table>
  </section>


  <section id="cart-bottom">


    <div class="total ">
      <div>
        <h5>CART TOTAL</h5>
        <div>
          <h6>Subtotal</h6>
          <p>$<?php echo total_cart(); ?></p>
        </div>
        <div>
          <h6>Shipping</h6>
          <p>$215.000</p>
        </div>
        <div>
          <h6>Total</h6>
          <p>$<?php echo total_cart(); ?></p>
          <a href="checkout.php">PROCEED TO CHECKOUT</a>
        </div>

      
      </div>
    </div>

  </section>
 
  <!-- cart end -->

  <?php include 'inc/footer.php'; ?>
</body>

</html>