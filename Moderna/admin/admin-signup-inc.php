<?php

if(isset($_POST['signup-submit'])) {

    require '../db_connect.php';

    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];
    $status = $_POST['admin'];
    $msg = "";

    

    if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
        header("Location: ../admin-register?error=empty_fields&uid=".$username."&mail=".$email);
        exit();
    } else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match("/^[a-zA-Z0-9]*$/", $username) ) {
        header("Location: ../admin-register?error=invalid_mailuid");
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../admin-register?error=invalid_mail&uid=".$username);
        exit();
    } else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../admin-register?error=invalid_uid&mail=".$email);
        exit();
    } else if ($password !== $passwordRepeat) {
        header("Location: ../admin-register?error=pwdcheck");
        
        exit();
     }
     else if (strlen($password) < 8) {
        header("Location: ../admin-register?error=not_enough_pwd_char");
        exit();
     } else {

        $sql = "SELECT name FROM user WHERE name=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../admin-register?error=sql_error");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, 's', $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $result = mysqli_stmt_num_rows($stmt);
            if($result > 0) {
                header("Location: ../admin-register?error=user_taken&mail=");
                exit();
            }
            else {
                $sql = "INSERT INTO `user`(`name`, `email`, `password`, `status`) VALUES (?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../admin-register?error=sql_error");
                    exit();
                }
                else {
                    $hashpwd = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, 'ssss', $username, $email, $hashpwd, $status);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);
                    header("Location: ../admin-index?success=signup-success");
                    exit();
                    
                    }
            }
        }

     }
     mysqli_stmt_close($stmt);
     mysqli_close($conn);

}
else {
    header("Location: ../admin-register");
    exit();
}

?>