<!-- Connect MySql Database-->
<?php include "phpconnect.php";

if (isset($_POST['Add_item'])) {
    $name = $_POST['Name'];
    $detail = $_POST['Detail'];
    $price = $_POST['Price'];
    $category = $_POST['categories'];
    $material = $_POST['Material'];

    $sql = "INSERT INTO item(Item_Name,Item_Detail,Item_Price,Item_Category,Item_Material)
                    VALUES ('$name','$detail',$price,'$category','$material')";

    $result = mysqli_query($conn, $sql);

    if ($result == true) {
        header("location: Admin Add Item Images.php");
    }
     else {
?>
    <Script>
        alert("Wrong data");
        window.location.href = "Admin Add Item.php";
    </Script>
<?php
}
}

if (isset($_POST['Edit_item'])) {
    $id = $_POST['ID'];
    $editname = $_POST['Edit-Name'];
    $editdetail = $_POST['Edit-Detail'];
    $editmaterial = $_POST['Edit-Material'];
    $editprice = $_POST['Edit-Price'];
    
    $editsql = "UPDATE item SET
                Item_Name = '$editname',
                Item_Detail = '$editdetail',
                Item_Material = '$editmaterial',
                Item_Price = $editprice
                WHERE Item_ID = $id";

    $runedit = mysqli_query($conn, $editsql);

    if ($runedit == true) { ?>
    <script>
        alert("Edit Success");
        window.location.href = "Admin Item.php";
    </script>
    <?php
    }

    else{?>
        <script>
        alert("Edit Error");
    </script>
    <?php
    }
}
