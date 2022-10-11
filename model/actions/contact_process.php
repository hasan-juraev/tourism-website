<?php 
    require('../database.php');
    require('../functions.php'); 
?>

<?php
   if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if($_POST['first_name']){
        
        echo "<script>console.log('message is recieved')</script>";
        echo "<script>console.log('".$_POST['first_name']."')</script>";

        store_user_messages($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['phone_number'], $_POST['b_inquiry'], $_POST['message']);
       

    }
   }

 