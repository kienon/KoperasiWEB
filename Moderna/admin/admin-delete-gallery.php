<?php
require('../db_connect.php');
$id=$_REQUEST['id'];
$name = $_REQUEST['name'];
$filename = "../".$name;
if (file_exists($filename)) 
   {
     unlink($filename);
      $msg = "File Successfully Delete."; 
  }
  else
  {
   $msg = "File does not exists"; 
  }
$query = "DELETE FROM images WHERE id=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
unlink($name);

header("Location: ../admin-gallery?$msg"); 
?>