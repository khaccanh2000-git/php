<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <?php require_once 'css.php'; ?>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <?php require_once 'humberger.php'; ?>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <?php require_once 'header.php'; ?>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <?php require_once 'herosec.php'; ?>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <?php require_once 'bread.php'; ?>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data['cart'] as $value) {
                                	
                                 ?>
                                 <tr>
                                    <td class="shoping__cart__item">
                                        <img src="<?php echo URL_LAYOUT.'img/product/'.$value['img'] ?>" alt="">
                                        <h5><?php echo $value['tensp']; ?></h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                       <?php echo $value['gia']; ?>
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="<?php echo $value['count']; ?>">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                        <?php echo $value['count']*$value['gia']; ?>
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <a href="<?php echo URL.'cart/delete/'.$value['id']; ?>"><span class="icon_close"></span></a>
                                    </td>
                                </tr>

                            <?php } ?>
                                
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="<?php echo URL.'layout/index'; ?>" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                        <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            Upadate Cart</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Discount Codes</h5>
                            <form action="#">
                                <input type="text" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn">APPLY COUPON</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                            <li>Total <span>
                            	<?php 
                            		$tong=0;
                            		foreach ($data['cart'] as $value) {
                            			$tong+= $value['count']*$value['gia'];
                            		}
                            		echo $tong;
                            	 ?>

                            </span></li>
                        </ul>
                        <a href="#" class="primary-btn">PROCEED TO CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->

    <!-- Footer Section Begin -->
    <?php require_once 'footer.php'; ?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <?php require_once 'js.php'; ?>


</body>

</html>