<?php
require('../db_connect.php');
$id=$_REQUEST['id'];
$file=$_REQUEST['name'];
$filename = "../".$file;
if (file_exists($filename)) 
   {
     unlink($filename);
      $msg = "File Successfully Delete."; 
  }
  else
  {
   $msg = "File does not exists"; 
  }

$query = "DELETE FROM slides WHERE id=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: ../admin-slides?$msg"); 
?>