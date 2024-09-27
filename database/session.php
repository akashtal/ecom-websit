  <?php


session_start();

$session_id = $_SESSION['session_id'];

if ($session_id == 0){
	echo 
           "<script>
              window.location = 'index.php?page=admin-login';
           </script>"
} elseif ($session_id == '') {
	echo 
           "<script>
              window.location = 'index.php?page=admin-login';
           </script>"
} else {
	echo 
           "<script>
              window.location = 'index.php?page=dashboard';
           </script>"
}

?>


