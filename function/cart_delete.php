<?php

    $delete_id = $_GET['id'];

    // Find and remove the item from the cart based on the provided ID
    foreach ($_SESSION['cart'] as $key => $cart_item) {
        if ($cart_item['prod_id_session'] == $delete_id) {
            unset($_SESSION['cart'][$key]);
            break;  // Stop searching once the item is found and removed
        }
    }
?>
      <script>
        window.location = 'index.php?page=cart';
      </script>
    <?php

?>
