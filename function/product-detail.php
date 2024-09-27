<?php
$prod_id = isset($_GET['id']) ? $_GET['id'] : 0;

// Assuming $conn is your PDO connection
$stmt = $conn->prepare("SELECT * FROM products WHERE id = :prod_id");
$stmt->bindParam(':prod_id', $prod_id, PDO::PARAM_INT);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_OBJ);

if ($result) {
    $product_id = $result->id;
    $product_name = $result->prod_name;
    $product_desc = $result->prod_desc;
    $product_img_1 = $result->prod_thumb_1;
    $product_img_2 = $result->prod_thumb_2;
    $product_img_3 = $result->prod_thumb_3;
    $product_img_4 = $result->prod_thumb_4;
    $product_price = $result->prod_price;
} else {
    // Handle product not found
    echo "Product not found.";
    exit;
}
?>

<div class="container pt-2">
    <div class="row">
        <div class="col-md-4">
           
            <div class="row">
            	<div class="col-md-12">
                    
                <img id="myImage" src="assets/img/uploads<?php echo $product_img_1 ?>" style="width:300px">
                </div>

            	<div class="col-md-3">
                    <img onclick="document.getElementById('myImage').src='assets/img/uploads<?php echo $product_img_2 ?>'" width="80px" src="assets/img/uploads<?php echo $product_img_2 ?>">
                </div>

            	<div class="col-md-3">
                    <img onclick="document.getElementById('myImage').src='assets/img/uploads<?php echo $product_img_3 ?>'" width="80px" src="assets/img/uploads<?php echo $product_img_3 ?>">
                </div>

            	<div class="col-md-3">
                    <img onclick="document.getElementById('myImage').src='assets/img/uploads<?php echo $product_img_4 ?>'" width="80px" src="assets/img/uploads<?php echo $product_img_4 ?>">
                </div>
        	
            </div>
        </div>
            

        <div class="col-md-8" style="text-align: justify;">
            <span style="font-size: 28px; font-family: Roboto Slab;">Name : <?php echo $product_name?></span>

            <p>
            <span style="font-size: 24px; font-family: Roboto Slab; color: red;"><strong>Rs. <?php echo $product_price?></strong></span>
            </p>

            <p>
             <h3>Description :</h3>   
            <span style="font-size: 15px;"><strong>
            <?php echo$product_desc?>
          
            </strong></span>
            </p>
            
            <a class="btn btn-primary" href="index.php?page=addToCart&id=<?php echo $_GET['id']?>">Buy Now</a>
            <br>
            <br>

        </div>    
    </div>
</div> 



