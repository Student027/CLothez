<?php
include "phpconnect.php";


if (isset($_POST['Add_to_cart'])) {
    $size = $_POST['Size'];

    if ($size == "none") {
?>
        <script>
            alert("Item Unavailable");
            window.history.go(-3);
        </script>
        <?php
    } else {

        $id = $_POST['ID'];
        $name = $_POST['Name'];
        $quantity = 1;
        $price = $_POST['Price'];
        $color = $_POST['color'];

        $sql = "SELECT * FROM item_images WHERE F_Item_ID = $id AND Color = '$color'";
        $run = mysqli_query($conn, $sql);
        if ($fecth = mysqli_fetch_assoc($run)) {
            $img = $fecth['Images'];
        }


        $sql = "INSERT INTO cart (Image,Name,Size,Quantity,Price,Color)
            VALUES ('$img','$name','$size','$quantity','$price','$color')";
        $Add = mysqli_query($conn, $sql);
        if ($Add == true) {
        ?>
            <script>
                alert("Added To Cart");
                window.history.go(-3);
            </script>
<?php
        }
    }
}