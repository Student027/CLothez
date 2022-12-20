<!-- Navigation-->
<?php
session_start();
if (empty($_SESSION['CurUser'])) {
    $_SESSION['CurUser'] = "";
}
include "Customer_nav.php";
include "phpconnect.php";

if (empty($_SESSION['CurUser'])) {
    header("Location: Log In Customer.php");
}
?>

<!-- Section-->
<section class="py-5">
    <div class="px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-3 justify-content-center">
            <table class="table table-striped">
                <TR>
                    <TD align="middle">No</TD>
                    <TD align="middle">Ordered Item</TD>
                    <TD align="middle">Total Quantity</TD>
                    <TD align="middle">Total Price(RM)</TD>
                    <TD align="middle">Status</TD>
                    <td align="middle">Action</td>
                </TR>

                <?php
                if (isset($_GET['delete_id'])) {
                    $sql_query = "UPDATE orders SET
                    Approval = 'Cancelled'
                    WHERE Order_ID =" . $_GET['delete_id'];
                    mysqli_query($conn, $sql_query);
                    header("Location: Customer Order.php");
                }

                $user = $_SESSION['CurUser'];
                $sql = "SELECT * FROM orders WHERE Approval = 'none' AND Customer='$user'";
                $runq = mysqli_query($conn, $sql);
                $num = 0;

                if (mysqli_num_rows($runq) > 0) {
                    while ($rec = mysqli_fetch_assoc($runq)) {
                        $orderid = $rec['Order_ID'];
                        $sql2 = "SELECT * FROM order_history WHERE orderid=$orderid";
                        $runq2 = mysqli_query($conn, $sql2);
                ?>
                        <tr>
                            <TD align="middle"><?php echo $num = $num + 1; ?></TD>

                            <td>
                                <?php while ($rec2 = mysqli_fetch_assoc($runq2)) {
                                ?>
                                    <div class="row main align-items-center">
                                        <div class="col-2"><img class="img-fluid" src="Images\<?php echo $rec2['Image']; ?>"></div>
                                        <div class="col">
                                            <div class="row"><?php echo $rec2['Name']; ?></div>
                                            <div class="row">Size: <?php echo $rec2['Size']; ?></div>
                                            <div class="row">Color: <?php echo $rec2['Color']; ?></div>
                                            <div class="row">x <?php echo $rec2['Tquantity']; ?></div>
                                        </div>
                                    </div>
                                <?php
                                } ?>
                            </td>
                            <td align="middle"><?php echo $rec['Total_quantity']; ?></td>
                            <td align="middle"><?php echo $rec['Total_price']; ?></td>
                            <TD align="middle"><div class="text-danger">Pending..</div></TD>
                            <td align="middle">
                                <a class="btn btn-outline-dark" href="javascript:delete_id(<?php echo $rec['Order_ID']; ?>)">
                                    Cancel
                                </a>
                            </td>
                        </tr>
                <?php }
                } else {
                    echo "<div class='form-control text-center'>Your Order is Empty</div>";
                } ?>
            </table>
        </div>
    </div>
</section>
<!-- Footer-->
<?php
if (mysqli_num_rows($runq) > 0) {
    include "footer.php";
} else {
?>
    <div class="footer-fixed">
        <?php include "footer.php"; ?>
    </div>
<?php } ?>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<script>
    function delete_id(id) {
        if (confirm("Cancel Order ?")) {
            window.location.href = 'Customer Order.php?delete_id=' + id;
        }
    }
</script>