<?php
$conn = new mysqli("localhost", "root","","federasi");

$msg = "";

if(isset($_POST[ 'upload'])){
  $image = $_FILES['image']['name'];
  $path = 'images/'.$image;

$sql = $conn->query("INSERT INTO slides (image) VALUES ('$path')");
if($sql){
  move_uploaded_file($_FILES['image']['tmp_name'], $path);
  $msg = 'Image Uploaded Successfully! ';
}else{
  $msg = 'Image Upload Failed! ';
}
}
//getimagefromdatabase
$result = $conn->query("SELECT image FROM slides");
?>

<!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset= "UTF-8">
   <meta name= "author" content= "TFP Solutions Sdn Bhd">
   <meta http-equiv= "X-UA-Compatible" content= "IE=edge">
   <meta name= "viewport" content= "width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>TEST SLIDE</title>
   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   <!-- jQuery library -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
   <!-- Latest compiled JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <!-- Popper 3S -->
    <script sre="https://cdnjs.cloudFlare.con/ajax/1ibs/popper.js/1.14.7/und/popper.min.js"></script>
  </head>
 <body>

   <div class= "row justify-content-center">
     <div class= "col-lg-4 bg-dark rounded рх-4">
       <h4 class= "text-center text-light p-1">Select Image to Upload!
       </h4>
       <form action="" method= "post" enctype= "multipart/form-data">

         <div class= "form-group">
           <input type= "file" name= "image" class= "form-control p-1" required>
         </div>

         <div class= "form-group">
           <input type= "submit" name= "upload" class= "btn btn-warning btn-block" value= "Upload Image">
         </div>
         
         <div class="form-group">
        <h5 class= "text-center text-light"><?= $msg; ?></h5>
        </div>

       </form>
     </div>
   </div>
</div>

 </body>
 </html>




