<!-- Navigation-->
<?php
include "Admin_nav.php";
include "phpconnect.php";

if (empty($_SESSION['CurAdmin'])) {
    header("Location: Log In Admin.php");
}
?>

<!-- Header-->
<header class="bg-dark py-4">
    <div class="container">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Order History</h1>
        </div>
    </div>
</header>

<!-- Section-->
<section class="py-5">
    <div class="px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-3 justify-content-center">
            <table class="table table-striped">
                <TR>
                <td align="middle">Order ID</td>
                    <TD align="middle">Customer Name</TD>
                    <TD align="middle">Total Quantity</TD>
                    <TD align="middle">Total Price (RM)</TD>
                    <td align="middle">Order Approval</td>
                    <td align="middle"></td>
                </TR>

                <?php
                if (isset($_GET['delete_id'])) {
                    $delete = "DELETE FROM orders WHERE Order_ID=" . $_GET['delete_id'];
                    mysqli_query($conn, $delete);
                    header("Location: Admin Order History.php");
                }

                $sql = "SELECT * FROM orders WHERE Approval NOT IN ('none')";
                $runsql = mysqli_query($conn, $sql);
                while ($dfhg = mysqli_fetch_assoc($runsql)) { ?>

                <tr>
                <td align="middle">#<?php echo $dfhg['Order_ID']; ?></td>
                    <TD align="middle"><?php echo $dfhg['Customer']; ?></TD>
                    <td align="middle"><?php echo $dfhg['Total_quantity']; ?></td>
                    <td align="middle"><?php echo $dfhg['Total_price']; ?></td>
                    <td align="middle"><?php echo $dfhg['Approval']; ?></td>
                    <td align="middle">
                        <a class="btn btn-outline-danger" href="javascript:del(<?php echo $dfhg['Order_ID']; ?>)"><i class="bi-trash-fill me-1"></i></a><br><br>
                        <form action="Admin Print Summary Order.php" method="POST">
                            <input hidden name="orderid" value="<?php echo $dfhg['Order_ID']; ?>">
                            <button name="print" class="btn btn-outline-dark"><i class="bi-printer-fill"></i></button>
                        </form>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</section>

<script>
        function del(id) {
            if (confirm("Sure To Remove ?")) {
                window.location.href = 'Admin Order History.php?delete_id=' + id;
            }
        }
</script>

<!-- Footer-->
<?php
if (mysqli_num_rows($runsql) > 1) {
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
</body>

</html>