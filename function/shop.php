<!-- Header -->
<div class="container-fluid bg-primary" style="height: 50px;">
    <div class="text-center pt-2" style="font-size: 30px; font-weight: 100; color: #fff;">
        Shop Here
    </div>
</div>

<!-- Product Grid -->
<div class="container-fluid p-3">
    <div class="row">

        <?php
        $stmt = $conn->prepare("SELECT * FROM products");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        foreach ($result as $data) {
            $product_id = $data->id;
            $product_name = $data->prod_name;
            $product_image_1 = $data->prod_thumb_1;
            $product_price = $data->prod_price;
        ?>

        <div class="col-md-2">
            <div class="card mb-4">
                <div class="image-container">
                    <div class="first d-flex justify-content-between align-items-center">
                        <span class="discount">-25%</span>
                        <span class="wishlist"><i class="fa fa-heart-o"></i></span>
                    </div>
                    <img src="assets/img/uploads<?php echo $product_image_1 ?>" class="img-fluid rounded thumbnail-image">
                </div>
                <div class="product-detail-container p-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="dress-name"><?php echo $product_name ?></h5>
                        <div class="d-flex flex-column mb-2">
                            <span class="new-price">Rs.<?php echo $product_price ?></span>
                            <small class="old-price text-right">$5.99</small>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center pt-1">
                        <div class="color-select d-flex">
                            <input type="button" name="grey" class="botn creme">
                            <input type="button" name="red" class="botn red ml-2">
                            <input type="button" name="blue" class="botn blue ml-2">
                        </div>
                        <div class="d-flex">
                            <span class="item-size mr-2 btn" type="button">S</span>
                            <span class="item-size mr-2 btn" type="button">M</span>
                            <span class="item-size btn" type="button">L</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center pt-1">
                        <div>
                            
                            <span style="color: red;"><a href="index.php?page=addToCart&id=<?php echo $product_id?>">Add Cart</a></span>
                        </div>
                        <span class="buy"><a href="index.php?page=product-detail&id=<?php echo $product_id ?>">Buy Now +</a></span>
                    </div>
                </div>
            </div>
        </div>

        <?php
        }
        ?>

    </div>
</div>

<!-- Bootstrap JS and other scripts go here -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

