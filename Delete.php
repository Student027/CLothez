<?php
include "phpconnect.php";

if (isset($_GET['Item_ID'])){
    $id = $_GET['Item_ID'];
    $del=$mysqli->query("DELETE FROM item WHERE Item_ID=$id");
    if($del){
        header("Location:Admin Item.php?delete_action=success");
    }
    else{
        echo $mysqli->error;
    }
}

?>