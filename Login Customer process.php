<?php 
session_start();
include "phpconnect.php";

if (isset($_POST['email']) && isset($_POST['pass'])) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $email = validate($_POST['email']);
    $pass = validate($_POST['pass']);

    if (empty($email)) {
        header("Location: Log In Customer.php?error=Email is required");
        exit();
    }

    if(empty($pass)){
        header("Location: Log In Customer.php?error=Password is required");
        exit();
    }

    else{
        $sql = "SELECT * FROM login WHERE Email='$email' AND Pword='$pass'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);

            if ($row['Email'] === $email && $row['Pword'] === $pass) {
                if($row['User']==0){
                    $_SESSION['CurUser'] = $row['Name'];
                    ?>
                    <script> window.history.go(-2); </script>
                    <?php
                    exit();
                }
                else{
                    header("Location: Log In Customer.php?error=This site is only available for customer");
                }
            }

            else{
                header("Location: Log In Customer.php?error=Incorect Email or password");
                exit();
            }
        }

        else{
            header("Location: Log In Customer.php?error=Incorect Email or password");
            exit();
        }
    }
}

else{
    header("Location: Log In Customer.php");
    exit();
}