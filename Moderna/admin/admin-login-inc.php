<?php


if(isset($_POST['login'])) {
    require '../db_connect.php';
    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];

    if(empty($mailuid) || empty($password)) {
        header("Location: ../admin-login?error=empty_fields&uid=");
        exit();
    } else {
        $sql = "SELECT * FROM user WHERE name = ? OR email = ?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../admin-login?error=sql_error");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, 'ss', $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)) {
                $pwdchck = password_verify($password, $row['password']);
                if($pwdchck == false) {
                    header("Location: ../admin-login?error=wrong_password");
                    exit();
                } else if ($pwdchck == true) {
                    session_start();
                    $_SESSION['username'] = $row['name'];

                    header("Location: ../admin-index?login=success");
                    exit();
                } else {
                    header("Location: ../admin-login?error=wrong_password");
                    exit();
                }
            } else  {
                header("Location: ../admin-login?error=no_user");
                exit();
            }
        }    
    }

} else {
    header("Location: ../admin-index");
    exit();
}


?>