<?php

if(isset($_POST['member-submit'])) {

    require '../db_connect.php';

    $kopname = $_POST['Koperasi'];
    $pborong = $_POST['Pemborong'];
    $pruncit = $_POST['Peruncitan'];
    
    $pmodal = $_POST['ModalSyer'];
    $msg = "";

    

    if (empty($kopname) || empty($pborong) || empty($pruncit) || empty($pmodal)) {
        header("Location: ../admin-member-add?error=empty_fields&Koperasi=".$kopname);
        exit();
    } 
     else{
        $sql = "SELECT Koperasi FROM keahlian WHERE Koperasi=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../admin-member-add?error=sql_error");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, 's', $kopname);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $result = mysqli_stmt_num_rows($stmt);
            if($result > 0) {
                header("Location: ../admin-member-add?error=Koperasi_already_exist");
                exit();
            }
            else {
                $sql = "INSERT INTO `keahlian`(`Koperasi`, `Pemborong`, `Peruncitan`, `ModalSyer`) VALUES (?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../admin-member-add?error=sql_error");
                    exit();
                }
                else {
                    mysqli_stmt_bind_param($stmt, 'ssss', $kopname, $pborong, $pruncit, $pmodal);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);
                    header("Location: ../admin-membership?success=add-success");
                    exit();
                    
                    }
            }
        }

     }
     mysqli_stmt_close($stmt);
     mysqli_close($conn);

}
else {
    header("Location: ../admin-member-add");
    exit();
}

?>