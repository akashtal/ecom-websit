<?php  

session_start();
error_reporting(0);

  $function_name = $_GET['page'];
  $customer_name = $_GET['page'];

  include('database/config.php');

  include ('includ/header.php');

  //this section we will fetch the body part from url

  if ($function_name !='') {
      include ("function/$function_name.php");
  } else {
    include ("function/home.php");
  }

  //the section end

  include ('includ/footer.php');
?>
