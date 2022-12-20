<!-- Navigation-->
<?php
session_start();
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
                    <TD align="middle">Order Status</TD>
                    <TD align="middle">Total Quantity</TD>
                    <TD align="middle">Total Price(RM)</TD>
                    <td align="middle">Action</td>
                </TR>

                <?php
                $user = $_SESSION['CurUser'];
                $sql = "SELECT * FROM orders WHERE Customer = '$user' 
                                AND Approval NOT IN ('none') 
                                AND Deleted NOT IN ('Yes')";
                $order = mysqli_query($conn, $sql);
                $num = 0;
                while ($rec = mysqli_fetch_assoc($order)) {
                    $num = $num + 1;
                ?>
                    <tr>
                        <TD align="middle"><?php echo $num; ?></TD>
                        <TD align="middle"><?php echo $rec['Approval']; ?></TD>
                        <td align="middle"><?php echo $rec['Total_quantity']; ?></td>
                        <td align="middle"><?php echo $rec['Total_price']; ?></td>
                        <td align="middle">
                            <a class="btn btn-outline-danger" href="javascript:del(<?php echo $rec['Order_ID']; ?>)"><i class="bi-trash-fill me-1"></i></a><br><br>
                            <form action="Customer Print Summary Order.php" method="POST">
                                <input hidden name="orderid" value="<?php echo $rec['Order_ID']; ?>">
                                <button name="print" class="btn btn-outline-dark"><i class="bi-printer-fill"></i></button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</section>
<!-- Footer-->
<?php
if (mysqli_num_rows($order) > 2) {
    include "footer.php";
} else {
?>
    <div class="footer-fixed">
        <?php include "footer.php"; ?>
    </div>
<?php } 

//sql to change delete confition
if (isset($_GET['delete'])) {
    $sql_query = "UPDATE orders SET
    Deleted = 'Yes'
    WHERE Order_ID =" . $_GET['delete'];
    mysqli_query($conn, $sql_query);
    ?>
    <script> window.location.href = "Customer Order history.php"; </script>
    <?php
}
?>

<!--Script to approve and unapprove order-->
<script>
    function del(id) {
        if (confirm("Delete Order ?")) {
            window.location.href = 'Customer Order history.php?delete=' + id;
        }
    }
</script>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>