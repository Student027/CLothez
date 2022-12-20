<!-- Navigation-->
<?php
session_start();
if (empty($_SESSION['CurUser'])) {
    $_SESSION['CurUser'] = "";
}
include "Customer_nav.php";
include "phpconnect.php";
?>
<!-- Extra Style -->
<style>
    .title {
        margin-bottom: 5vh;
    }

    .title b {
        font-size: 1.5rem;
    }

    .text-right {
        text-align: right !important
    }

    #code {
        background-image: linear-gradient(to left, rgba(255, 255, 255, 0.253), rgba(255, 255, 255, 0.185)), url("https://img.icons8.com/small/16/000000/long-arrow-right.png");
        background-repeat: no-repeat;
        background-position-x: 95%;
        background-position-y: center;
    }

    .close {
        margin-left: auto;
        font-size: 0.7rem;
    }
</style>

<!-- Section-->
<section class="py-5 container-fluid">
    <div class="row">
        <div class="col-md-7 justify-content-center">
            <div class="title">
                <div class="row">
                    <div class="col">
                        <h4><b>DELIVERY</b></h4>
                    </div>
                    <div class="text-muted">Please double check your delivery address</div>
                </div>
            </div>

            <?php
            $user = $_SESSION['CurUser'];
            $sql = "SELECT * FROM login WHERE Name = '$user'";
            $fetch = mysqli_query($conn, $sql);

            //command to fetch data from cart table
            if (mysqli_num_rows($fetch) > 0) {
                if ($rec = mysqli_fetch_assoc($fetch)) {
            ?>
                    <div class="row border-top border-bottom">
                        <div class="row main align-items-center">
                            <div class="col">
                                <div class="row-1"><?php echo $rec['Address1']; ?>,</div>
                                <div class="row-1"><?php echo $rec['Address2']; ?>,</div>
                                <div class="row-1"><?php echo $rec['City'].", ".$rec['State'].", ".$rec['Postal']; ?></div>
                            </div>
                        </div>
                    </div>
                    <tr>
                <?php }
            } else {
                echo "<div class='form-control text-center'>Your Address is Empty</div>";
            }
                ?>
        </div>

        <?php
        $sql = "SELECT * FROM cart";
        $fetch = mysqli_query($conn, $sql);
        $quantity = 0;
        $price = 00.00;
        $tquantity = 0;
        $tprice = 00.00;
        $item = 0;

        //command to calculate data from cart table
        if (mysqli_num_rows($fetch) > 0) {
            while ($rec = mysqli_fetch_assoc($fetch)) {
                $item = $item + 1;
                $quantity = $rec['Quantity'];
                $price = $rec['Price'];
                $trueprice = $quantity * $price;
                $tquantity += $rec['Quantity'];
                $tprice += $trueprice;
            }
        ?>

            <div class="col-md-5 justify-content-center">

                <div class="row border-bottom">
                    <div class="col">
                        <h4><strong>Order Summary</strong></h4>
                    </div>
                    <div class="col align-self-center text-right text-muted">
                        <p>Total Item: <?php echo $tquantity; ?></p>
                    </div>
                </div><br>

                <div class="row">
                    <div class="col">
                        <h6>ORIGINAL PRICE</h6>
                    </div>
                    <div class="col align-self-center text-right">
                        <p>RM <?php echo number_format($tprice, 2); ?></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <h6>DELIVERY</h6>
                    </div>
                    <div class="col align-self-center text-right">
                        <p>FREE</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <h6><strong>TOTAL</strong></h6>
                    </div>
                    <div class="col align-self-center text-right">
                        <p><strong>RM <?php echo number_format($tprice, 2); ?></strong></p>
                    </div>
                </div>

                <!--Order Details Form-->
                <div class="row border-bottom">
                    <div class="col">
                        <h4><strong>Order Details</strong></h4>
                    </div>
                </div>

                <!--Command to fecth data from cart-->
                <?php
                $sql = "SELECT * FROM cart";
                $fetch = mysqli_query($conn, $sql);
                while ($rec = mysqli_fetch_assoc($fetch)) {
                    $quantity = $rec['Quantity'];
                    $price = $rec['Price'];
                    $trueprice = $quantity * $price;
                ?>
                    <div class="row border-top border-bottom">
                        <div class="row main align-items-center">
                            <div class="col-2"><img class="img-fluid" src="Images/<?php echo $rec['Image']; ?>" /></div>
                            <div class="col">
                                <div class="row"><?php echo $rec['Name']; ?></div>
                                <div class="row">Size: <?php echo $rec['Size']; ?></div>
                                <div class="row">Color: <?php echo $rec['Color']; ?></div>
                                <div class="row">x <?php echo $quantity; ?></div>
                            </div>
                            <?php  ?>
                            <div class="col">RM <?php echo number_format($trueprice, 2); ?></div>
                        </div>
                    </div>
            <?php }
            } else {
                echo "<div class='form-control text-center'>Your Cart is Empty</div>";
            }
            ?>
            <!--Form for make order-->
            <form action="Customer Cart Composer.php" method="POST">
                <input hidden name="Quantity" value="<?php echo $tquantity; ?>">
                <input hidden name="Price" value="<?php echo $tprice; ?>">
                <input hidden name="Customer" value="<?php echo $_SESSION['CurUser']; ?>">
                <button id="code" name="Order" type="submit" class="form-control btn btn-outline-dark">PLACE ORDER</button>
            </form>
            </div>
    </div>
</section>
<!-- Footer-->
<?php
if (mysqli_num_rows($fetch) > 1) {
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