<?php
$coupon = $_POST['coupon'];
$coupon_session = $_SESSION['coupon_s'];

// Assuming GST rate is 18%
$gst_rate = 18;

if ($coupon == 'First20') {
    $coupon_value = (20 / 100);
} elseif ($coupon == 'First50') {
    $coupon_value = (50 / 100);
} elseif ($coupon == 'welcome60') {
    $coupon_value = (60 / 100);
} elseif ($coupon == 'welcome100') {
    $coupon_value = (100 / 100);
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-12 p-2" style="font-style: Roboto Slab; text-align: center;">
            My Cart
            <div class="card">
                <div class="row">
                    <div class="col-md-8 cart">
                        <div class="title">
                            <div class="row">
                                <div class="col"><h4><b>Shopping Cart</b></h4></div>
                            </div>
                        </div>
                        <?php
                        $total_price = 0;
                        if (isset($_SESSION['cart'])) {
                            $i = 0; // Initialize $i here
                            foreach ($_SESSION['cart'] as $cart_item) {
                                $i++; // Increment $i for each iteration
                                // Display the cart item here
                                ?>
                                <div class="row border-top border-bottom">
                                    <div class="row main align-items-center">
                                        <div class="col align-self-center text-right text-muted">Product No.<?php echo $i ?></div>
                                        <div class="col-2"><img class="img-fluid" src="assets/img/uploads<?php echo $cart_item['prod_img_session']; ?>"></div>
                                        <div class="col">
                                            <div class="row"><?php echo $cart_item['prod_name_session']; ?></div>
                                        </div>
                                        <div class="col"><?php echo $cart_item['prod_price_session']; ?><span class="close"></span></div>
                                        <div class="col">
                                            <div><i class="fa fa-trash" aria-hidden="true"></i></div>
                                            <a href="index.php?page=cart_delete&id=<?php echo $cart_item['prod_id_session']; ?>">Delete</a><span class="close"></span>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                // Update the total price for each item
                                $total_price += floatval($cart_item['prod_price_session']);
                            }
                        }
                        ?>
                    </div>

                    <div class="col-md-4 summary">
                        <div><h5><b>Summary</b></h5></div>
                        <hr>
                        <div class="row">
                            <div class="col" style="padding-left:0;">ITEM = <?php echo count($_SESSION['cart']); ?></div>
                        </div>

                        <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                            <div class="col">CART AMOUNT = RS.<?php echo number_format($total_price, 2, '.', ''); ?></div>
                        </div>

                        <?php
                        if ($coupon == '') {
                            $new_sum = $total_price;
                        } else {
                            $new_sum = $total_price * $coupon_value;
                            ?>
                            <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                                <div class="col">Discount = RS.<?php echo number_format($new_sum, 2, '.', ''); 

                                     $_SESSION['discount'] = $new_sum;
                                          ?></div>
                            </div>
                            <?php
                        }
                        ?>

                        <?php
                        // Calculate GST amount
                        $gst_amount = ($total_price - $new_sum) * ($gst_rate / 100);
                        ?>
                        <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                            <div class="col">GST (<?php echo $gst_rate; ?>%) = RS.<?php echo number_format($gst_amount, 2, '.', ''); ?></div>
                        </div>

                        <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                            <div class="col">Total amount = RS.<?php echo number_format($total_price - $new_sum + $gst_amount, 2, '.', ''); ?></div>
                        </div>

                        <form method="POST">
                            <div class="row">
                                <div class="col">
                                    <label>Coupon Code:</label>
                                    <input type="hidden" name="page" value="cart">
                                    <input type="text" name="coupon" placeholder="Enter your coupon code">
                                    <button name="submit">Apply</button>
                                </div>
                            </div>
                        </form>
                        <a href="index.php?page=checkout">
                            <button>CHECKOUT</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
