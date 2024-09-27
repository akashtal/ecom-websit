<?php
$prod_id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM products WHERE id = :prod_id");
$stmt->bindParam(':prod_id', $prod_id);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_OBJ);

$product_id = $result->id;
$product_name = $result->prod_name;
$product_image_1 = $result->prod_thumb_1;
$product_price = $result->prod_price;

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

$_SESSION['cart'][] = array(
    'prod_id_session' => $product_id,
    'prod_name_session' => $product_name,
    'prod_img_session' => $product_image_1,
    'prod_price_session' => $product_price,
);

// Calculate total price
$total_price = floatval($product_price);  // Since only one item is added

echo "Total Price: $" . number_format($total_price, 0);
?>

<script>
    // Delay the redirection to make sure the user sees the total price
    //setTimeout(function(){
        window.location = 'index.php?page=cart';
    //}
</script>
