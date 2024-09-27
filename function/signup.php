<?php

if (isset($_POST['submit'])) {
    $user_names = $_POST['user_name'];
    $user_emails = $_POST['user_email'];
    $user_mobiles = $_POST['user_number'];
    $user_password = $_POST['user_password'];

    try {
        // Use bcrypt for password hashing
        $hashed_password = password_hash($user_password, PASSWORD_BCRYPT);

        $sql = "INSERT INTO ecom 
                (user_name, user_email, user_mobile, user_password)  
                VALUES (:value1, :value2, :value3, :value4)";

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':value1', $user_names);
        $stmt->bindParam(':value2', $user_emails);
        $stmt->bindParam(':value3', $user_mobiles);
        $stmt->bindParam(':value4', $hashed_password);

        $stmt->execute();

        echo "Record inserted successfully.";
        // Uncomment the following line if you want to redirect after successful insertion
        // header('Location: login.php');
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

?>


<div class="container-fluid" style="height: 50px; background-color: #094bae;">
    <div style="text-align: center; padding-top: 6px; font-size: 30px; font-weight: 100; color: #fff;">
        Sign-Up Here
    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" integrity="sha256-3sPp8BkKUE7QyPSl6VfBByBroQbKxKG7tsusY2mhbVY=" crossorigin="anonymous" />

<style> body{
background-image: -webkit-gradient(linear, left top, right top, from(#4e63d7), to(#76bfe9)) !important;
    background-image: linear-gradient(to right, #4e63d7 0%, #76bfe9 100%) !important;
    margin-top:20px;}</style>

<div class="container">
    <div class="row">
        <div class="col-md-11 mt-60 mx-md-auto">
            <div class="login-box bg-white pl-lg-5 pl-0 p-4">
                <div class="row no-gutters align-items-center">
                    <div class="col-md-6">
                        <div class="form-wrap bg-white">
                            <h4 class="btm-sep pb-3 mb-5">Create New Account</h4>
                            <form class="form" method="post" action="#">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group position-relative">
                                            <span class="zmdi zmdi-account"></span>
                                            <input name="user_name" type="text" id="username" class="form-control" placeholder="Your Name">
                                        </div>
                                        <div class="form-group position-relative">
                                            <span class="zmdi zmdi-email"></span>
                                            <input name="user_email" type="email" id="useremail" class="form-control" placeholder="Email Address">
                                        </div>
                                        <div class="form-group position-relative">
                                            <span class="zmdi zmdi-phone"></span>
                                            <input name="user_number" type="text" id="usernumber" class="form-control" placeholder="Mobile Number">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group position-relative">
                                            <span class="zmdi zmdi-lock"></span>
                                            <input name="user_password" type="password" id="userpassword" class="form-control" placeholder="Password">
                                        </div>
                                    </div>
                                    
                                    <div class="col-12 mt-30">
                                        <button type="submit" name="submit" id="submit" class="btn btn-lg btn-custom btn-dark btn-block">Sign Up</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="content text-center">
                            <div class="border-bottom pb-5 mb-5">
                                <h3 class="c-black">I Have A Account</h3>
                                <a href="index.php?page=login" class="btn btn-custom">Login</a>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    // Your custom scripts can be added here
</script>
```