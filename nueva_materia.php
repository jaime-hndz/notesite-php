<?php

session_start();
require_once 'conn.php';

if ($_SESSION['Loggedin'] == true && $_SESSION['type'] == 'admin') {

  $query = "SELECT * FROM users_admin WHERE email = '". $_SESSION['email'] ."'";
  $result = mysqli_query($conn, $query);

  $row = mysqli_fetch_array($result);


}else {
  header('location:index.php');
}


 ?>
<?php include 'includes/header.php'; ?>
<link rel="stylesheet" href="css/sidebarstyle.css">
<?php include 'sidebar.php'; ?>


<?php include 'includes/footer.php';  ?>
