<?php
include "Admin_nav.php";
include "phpconnect.php";

if (isset($_POST['print'])) {
    $id = $_POST['orderid'];

    $sql = "SELECT * FROM orders WHERE Order_ID = $id";
    $fetch = mysqli_query($conn, $sql);

    //Variable for calculation will be placed here
    $sumprice = 0;
    $free = 0;
    $totalprice = 00.00;

    //command to calculate data from cart table
    if (mysqli_num_rows($fetch) > 0) {
        if ($total = mysqli_fetch_assoc($fetch)) {
?>
            <!-- Section-->
            <section class="py-5 container-fluid">
                <div class="row">
                    <div class="col-md-3 justify-content-center">
                    </div>

                    <div class="col-md-6 justify-content-center">
                        <div class="row border-bottom">
                            <div class="col">
                                <h4><strong>Admin's Order Summary</strong></h4>
                            </div>
                            <div class="col align-self-center text-right text-muted">
                                <p>Total Item: <?php echo $total['Total_quantity']; ?></p>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col">
                                <h6>ORIGINAL PRICE</h6>
                            </div>
                            <div class="col align-self-center text-right">
                                <p>RM <?php echo $total['Total_price']; ?></p>
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

                        <!--Calculation involved-->
                        <?php
                        $sumprice = $total['Total_price'];
                        $totalprice = $sumprice - $free;
                        ?>

                        <div class="row">
                            <div class="col">
                                <h6><strong>TOTAL</strong></h6>
                            </div>
                            <div class="col align-self-center text-right">
                                <p><strong>RM <?php echo $totalprice; ?></strong></p>
                            </div>
                        </div>

                    <?php } ?>

                    <!--Order Details Form-->
                    <div class="row border-bottom">
                        <div class="col">
                            <h4><strong>Order Details</strong></h4>
                        </div>
                    </div>

                    <!--Command to fecth data from cart-->
                    <?php
                    $sql = "SELECT * FROM order_history WHERE orderid = $id";
                    $fetch = mysqli_query($conn, $sql);
                    while ($rec = mysqli_fetch_assoc($fetch)) {
                    ?>
                        <div class="row border-top border-bottom">
                            <div class="row main align-items-center">
                                <div class="col-2"><img class="img-fluid" src="Images/<?php echo $rec['Image']; ?>" /></div>
                                <div class="col">
                                    <div class="row"><?php echo $rec['Name']; ?></div>
                                    <div class="row">Size: <?php echo $rec['Size']; ?></div>
                                    <div class="row">Color: <?php echo $rec['Color']; ?></div>
                                    <div class="row">x <?php echo $rec['Tquantity']; ?></div>
                                </div>
                                <?php  ?>
                                <div class="col">RM <?php echo $rec['Oriprice']; ?></div>
                            </div>
                        </div>
                <?php }
                } ?>
                <!--Form for print receipt-->
                <form>
                    <button class="form-control btn btn-outline-dark" onclick="window.print()">PRINT RECEIPT</button>
                </form>
                    </div>
                </div>
            </section>

        <?php } else {
        echo "<div class='form-control text-center'>No Data</div>";
    }
    include "footer.php";
        ?>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        </body>

        </html>