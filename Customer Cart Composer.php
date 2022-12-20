<!--This page will convert multiple item in cart into one order-->
<?php
include "phpconnect.php";

if (isset($_POST['Order'])) {
    $tquantity = $_POST['Quantity'];
    $tprice = $_POST['Price'];
    $customer = $_POST['Customer'];

    //SQL to insert
    $sql = "INSERT INTO orders (Total_quantity,Total_price,Approval,Customer)
    VALUES ('$tquantity','$tprice','none','$customer')";
    $runq = mysqli_query($conn, $sql);
    if ($runq == true) {
        $sql2 = "SELECT * FROM orders order BY Order_ID DESC LIMIT 1";
        $runq2 = mysqli_query($conn, $sql2);

        if ($rec = mysqli_fetch_assoc($runq2)) {
            $idorder = $rec['Order_ID'];
        }

        //SQL to fecth data from cart tbl
        $sql3 = "SELECT * FROM cart";
        $runq3 = mysqli_query($conn, $sql3);
        while ($rec = mysqli_fetch_assoc($runq3)) {
            $name = $rec['Name'];
            $size = $rec['Size'];
            $quantity = $rec['Quantity'];
            $price = $rec['Price'];
            $color = $rec['Color'];
            $img = $rec['Image'];
            $tprice = $quantity * $price;

            //SQL to insert cart to order_history tbl
            $order = "INSERT INTO order_history (orderid,Image,Name,Size,Tquantity,Oriprice,Color)
            VALUES ('$idorder','$img','$name','$size','$quantity','$tprice','$color')";

            $into_order = mysqli_query($conn, $order);
        }

        //SQL to delete all data from cart
        $sqldel = "DELETE FROM cart";
        $delete = mysqli_query($conn, $sqldel);
        if ($delete == true) { ?>
            <script>
                alert("Order Success");
                window.location.href = "Customer Order.php";
            </script>
            <?php
        }
    }
}