<?php

if(isset($_POST['job-submit'])) {

    require '../db_connect.php';

    $id = $_POST['id'];
    $oview = $_POST['overview'];
    $rbili = $_POST['responsibilities'];
    $rment = $_POST['requirements'];
    $dates = $_POST['date'];
    $jobs = $_POST['job'];
    $msg = "";

    
    if (empty($jobs) || empty($oview)) {
        header("Location: ../admin-job-add?error=empty_fields&JobTitle=".$jobs."&Overview=".$oview);
        exit();
    } 
     else{
        $sql = "SELECT job FROM jawatan WHERE job=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../admin-job-add?error=sql_error");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, 's', $jobs);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $result = mysqli_stmt_num_rows($stmt);
            if($result > 0) {
                header("Location: ../admin-job-add?error=Koperasi_already_exist");
                exit();
            }
            else {
                $sql = "INSERT INTO `jawatan`(`job`, `overview`, `responsibilities`, `requirements`, `date`) VALUES (?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../admin-job-add?error=sql_error");
                    exit();
                }
                else {
                    mysqli_stmt_bind_param($stmt, 'sssss', $jobs, $oview, $rbili, $rment, $dates);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);
                    header("Location: ../admin-job?success=add-success");
                    exit();
                    
                    }
            }
        }

     }
     mysqli_stmt_close($stmt);
     mysqli_close($conn);

}
else {
    header("Location: ../admin-job-add");
    exit();
}

?>