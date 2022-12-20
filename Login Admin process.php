<?php 

session_start();

include "phpconnect.php";

if (isset($_POST['uname']) && isset($_POST['pass'])) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['pass']);

    if (empty($uname)) {
        header("Location: Log In Admin.php?error=User Name is required");
        exit();
    }

    if(empty($pass)){
        header("Location: Log In Admin.php?error=Password is required");
        exit();
    }

    else{
        $sql = "SELECT * FROM login WHERE Name='$uname' AND Pword='$pass'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);

            if ($row['Name'] == $uname && $row['Pword'] == $pass) {
                if($row['User']==1){
                    $_SESSION['CurAdmin'] = $row['Name'];
                    header("Location: Admin Item.php");
                    exit();
                }
                else{
                    header("Location: Log In Admin.php?error=This site is only available for Admin");
                }
            }

            else{
                header("Location: Log In Admin.php?error=Incorect User name or password");
                exit();
            }
        }

        else{
            header("Location: Log In Admin.php?error=Incorect User name or password");
            exit();
        }
    }
}

else{
    header("Location: Log In Admin.php");
    exit();
}