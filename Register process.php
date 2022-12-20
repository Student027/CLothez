<?php
include "phpconnect.php";

if (isset($_POST['register'])){
    $password = $_POST['password'];
    $cpassword = $_POST['confirm-password'];
    if ($password == $cpassword){
        $name = $_POST['username'];
        $email = $_POST['email'];
        $address1 = $_POST['address1'];
        $address2 = $_POST['address2'];
        $state = $_POST['state'];
        $city = $_POST['city'];
        $postal = $_POST['postal'];

        $sql = "INSERT INTO login SET
                Name = '$name',
                Pword = '$password',
                User = 0,
                Email = '$email',
                Address1 = '$address1',
                Address2 = '$address2',
                State = '$state',
                City = '$city',
                Postal = $postal";
        $run = mysqli_query($conn,$sql);

        if ($run == TRUE){
            header("Location: Log In Customer.php");
        }
        else{
            header("Location: Register.php?error=Input Wrong Data");
        }
    }
    else{
        header("Location: Register.php?error=Password Not Same");
    }
}