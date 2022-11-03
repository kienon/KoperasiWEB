<?php
require('../db_connect.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM slides WHERE id=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: ../admin-slides"); 
?>