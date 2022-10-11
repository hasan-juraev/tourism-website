<?php
    define('TITLE', "EDIT HOME");
    include '../assets/layouts/header.php';
    check_verified(); 
    require("../../model/functions.php");   
?>

<?php include("views/left_sidebar.php"); ?>
    <!-- header -->
    <?php include("views/navbar.php"); ?>
    <!-- !header -->

    <p>Edit Home</p>

 



    <?php include("views/footer.php"); ?>