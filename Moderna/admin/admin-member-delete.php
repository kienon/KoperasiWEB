<?php
require('../db_connect.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM keahlian WHERE id=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: ../admin-membership"); 
?>