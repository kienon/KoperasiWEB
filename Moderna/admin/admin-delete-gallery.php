<?php
require('../db_connect.php');
$id=$_REQUEST['id'];
$name = $_REQUEST['name'];
$query = "DELETE FROM images WHERE id=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
unlink($name);

header("Location: ../admin-gallery"); 
?>