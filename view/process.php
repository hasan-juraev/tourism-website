<?php include('../model/database.php');?>
<?php include('../model/functions.php');?>

<?php




if ($_POST['name']) {
    var_dump($_POST['name']);

}
echo "test";
$var = $_POST['name'];
insert_data($var);