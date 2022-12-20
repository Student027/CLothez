<?php
include "phpconnect.php";

//Select Item ID from latest inserted data
$sql = "SELECT * FROM item order BY Item_ID DESC LIMIT 1";
$runsql = mysqli_query($conn, $sql);
if ($rec = mysqli_fetch_assoc($runsql)) {
    $ID = $rec['Item_ID'];
}

if (isset($_POST['Enter-image'])) {

    $sqlsizes = "INSERT INTO item_size(F_Item_ID,Quantity,Size)
                VALUES ('$ID',0,'S')";
    $sqlsizem = "INSERT INTO item_size(F_Item_ID,Quantity,Size)
                VALUES ('$ID',0,'M')";
    $sqlsizel = "INSERT INTO item_size(F_Item_ID,Quantity,Size)
                VALUES ('$ID',0,'L')";
    $runsqlsizes = mysqli_query($conn, $sqlsizes);
    $runsqlsizem = mysqli_query($conn, $sqlsizem);
    $runsqlsizel = mysqli_query($conn, $sqlsizel);

    if (!empty($_FILES["Image"]["name"])) {
        $filename1 = $_FILES["Image"]["name"];
        $tempname1 = $_FILES["Image"]["tmp_name"];
        $folder1 = "Images/" . $filename1;
        $color = $_POST['color'];
        $sql1 = "INSERT INTO item_images(F_Item_ID,Images,Color)
            VALUES ('$ID','$filename1','$color')";
        $runsql1 = mysqli_query($conn, $sql1);
        move_uploaded_file($_FILES['Image']['tmp_name'], $folder1);
    }

    if (!empty($_FILES["Image2"]["name"])) {
        $filename2 = $_FILES["Image2"]["name"];
        $tempname2 = $_FILES["Image2"]["tmp_name"];
        $folder2 = "Images/" . $filename2;
        $color2 = $_POST['color2'];
        $sql2 = "INSERT INTO item_images(F_Item_ID,Images,Color)
            VALUES ('$ID','$filename2','$color2')";
        $runsql2 = mysqli_query($conn, $sql2);
        move_uploaded_file($_FILES['Image2']['tmp_name'], $folder2);
    }

    if (!empty($_FILES["Image3"]["name"])) {
        $filename3 = $_FILES["Image3"]["name"];
        $tempname3 = $_FILES["Image3"]["tmp_name"];
        $folder3 = "Images/" . $filename3;
        $color3 = $_POST['color3'];
        $sql3 = "INSERT INTO item_images(F_Item_ID,Images,Color)
            VALUES ('$ID','$filename3','$color3')";
        $runsql3 = mysqli_query($conn, $sql3);
        move_uploaded_file($_FILES['Image3']['tmp_name'], $folder3);
    }
    header("Location: Admin Item.php");
}
