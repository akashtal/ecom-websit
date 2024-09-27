<?php
$l_mobile = $_POST['l_mobile'];
$l_password = $_POST['l_password'];

$pass_encrypt = md5($l_password);

$session_id = $_SESSION['session_id'];

if ($session_id =='') {
    $new_session_id = 0;
} elseif ($session_id == 0) {
    $new_session_id = 0;
} else {
    $new_session_id = $session_id;
}

if ($new_session_id != 0) {
    ?>
    <script>
        window.location = 'index.php?page=user_dashboard';
    </script>
    <?php
}

if (isset($_POST['submit'])) {
    $stmt = $conn->prepare("SELECT * FROM ecom WHERE user_mobile = :mobile AND user_password = :password");
    $stmt->bindParam(':mobile', $l_mobile);
    $stmt->bindParam(':password', $pass_encrypt);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        $_SESSION['session_id'] = $result['id'];

        // Check user role and redirect accordingly
        if ($result['user_role'] == 'admin') {
           ?>
               <script>
                 window.location = 'index.php?page=dashboard';
               </script>
            <?php
            exit();
        } else {
            ?>
               <script>
                 window.location = 'index.php?page=user_dashboard';
               </script>
            <?php
            exit();
        }
    } else {
        // Login failed message
        $login_failed_message = "Login failed. Please check your credentials.";
    }
}
?>









<div class="container-fluid" style="height: 50px; background-color: #094bae;">
    <div style="text-align: center; padding-top: 6px; font-size: 30px; font-weight: 100; color: #fff;">
     Login Here
    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" integrity="sha256-3sPp8BkKUE7QyPSl6VfBByBroQbKxKG7tsusY2mhbVY=" crossorigin="anonymous" />

<style> body{
background-image: -webkit-gradient(linear, left top, right top, from(#4e63d7), to(#76bfe9)) !important;
    background-image: linear-gradient(to right, #4e63d7 0%, #76bfe9 100%) !important;
    margin-top:20px;}



</style>

<div class="container">
    <div class="row">
        <div class="col-md-11 mt-60 mx-md-auto">
            <div class="login-box bg-white pl-lg-5 pl-0 p-4">
                <div class="row no-gutters align-items-center">
                    <div class="col-md-6">
                        <div class="form-wrap bg-white">
                            <h4 class="btm-sep pb-3 mb-5">Login</h4>
                            <form class="form" method="post" action="#">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group position-relative">
                                            <span class="zmdi zmdi-account"></span>
                                            <input name="l_mobile" type="text" id="email" class="form-control" placeholder="Mobile Number">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group position-relative">
                                            <span class="zmdi zmdi-lock"></span>
                                            <input name="l_password" type="password" id="password" class="form-control" placeholder="Password">
                                        </div>
                                    </div>
                                   
                                    <div class="col-12 mt-30">
                                        <button name="submit" type="submit" id="submit" class="btn btn-lg btn-custom btn-dark btn-block">Sign In</button>
                                    </div>
                                    <br>
                                     <div class="col-12 text-lg-right">
                                        <a href="#" class="c-black">Forgot password ?</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="content text-center">
                            <div class="border-bottom pb-5 mb-5">
                                <h3 class="c-black">First time here?</h3>
                                <a href="index.php?page=signup" class="btn btn-custom">Sign up</a>
                            </div>
                            <h5 class="c-black mb-4 mt-n1">Or Sign In With</h5>
                            <div class="socials">
                                <a href="#" class="zmdi zmdi-facebook"></a>
                                <a href="#" class="zmdi zmdi-twitter"></a>
                                <a href="#" class="zmdi zmdi-google"></a>
                                <a href="#" class="zmdi zmdi-instagram"></a>
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