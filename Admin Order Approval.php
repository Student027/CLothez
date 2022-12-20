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
            <h1 class="display-4 fw-bolder">Order Approval</h1>
        </div>
    </div>
</header>
<!-- Section-->
<section class="py-5">
    <div class="px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-3 justify-content-center">
            <table class="table table-striped">
                <tr>
                <td align="middle">Order ID</td>
                    <td align="middle">Customer Name</td>
                    <td align="middle">Order Detail</td>
                    <td align="middle">Total Quantity</td>
                    <td align="middle">Total Price</td>
                    <td align="middle">Approval</td>
                </tr>

                <?php
                $sql = "SELECT * FROM orders WHERE Approval = 'none'";
                $runq = mysqli_query($conn, $sql);
                $num = 0;
                $customer = "";

                while ($rec = mysqli_fetch_assoc($runq)) {
                    if ($rec['Customer'] == "") {
                        $customer = "Unknown";
                    } else {
                        $customer = $rec['Customer'];
                    }
                ?>

                    <tr>
                    <td align="middle">#<?php echo $rec['Order_ID']; ?></td>
                        <td align="middle"><?php echo $customer; ?></td>
                        <td align="middle">Order Detail</td>
                        <td align="middle"><?php echo $rec['Total_quantity']; ?></td>
                        <td align="middle">RM <?php echo $rec['Total_price']; ?></td>
                        <td align="middle">
                            <a class="btn btn-outline-dark" href="javascript:approve(<?php echo $rec['Order_ID']; ?>)">
                                Approve
                            </a>
                            <a class="btn btn-outline-dark" href="javascript:unapprove(<?php echo $rec['Order_ID']; ?>)">
                                Unapprove
                            </a>
                        </td>
                    </tr>

                <?php } ?>
            </table>
        </div>
    </div>
</section>

<!--SQL Approve and Unapprove Order-->
<?php
if (isset($_GET['approve'])) {
    $id = $_GET['approve'];
    $sql = "UPDATE orders SET
            Approval = 'Approve'
            WHERE Order_ID = '$id'";
    $runsql = mysqli_query($conn, $sql);
    ?>
    <script> window.location.href = "Admin Order Approval.php"; </script>
    <?php
}
if (isset($_GET['unapprove'])) {
    $id = $_GET['unapprove'];
    $sql = "UPDATE orders SET
            Approval = 'Unapprove'
            WHERE Order_ID = '$id'";
    $runsql = mysqli_query($conn, $sql);
    ?>
    <script> window.location.href = "Admin Order Approval.php"; </script>
    <?php
}
?>

<!-- Footer-->
<?php
if (mysqli_num_rows($runq) > 3) {
    include "footer.php";
} else {
?>
    <div class="footer-fixed">
        <?php include "footer.php"; ?>
    </div>
<?php } ?>

<!--Script to approve and unapprove order-->
<script>
    function approve(id) {
        if (confirm("Approve Order ?")) {
            window.location.href = 'Admin Order Approval.php?approve=' + id;
        }
    }

    function unapprove(id) {
        if (confirm("Unapprove Order ?")) {
            window.location.href = 'Admin Order Approval.php?unapprove=' + id;
        }
    }
</script>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>

</html>