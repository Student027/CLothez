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

    input[type='number']::-webkit-inner-spin-button,
    input[type='number']::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    .custom-number-input input:focus {
        outline: none !important;
    }

    .custom-number-input button:focus {
        outline: none !important;
    }
</style>

<!-- Section-->
<section class="py-5 container-fluid">
    <div class="row">
        <div class="col-md-8 justify-content-center">
            <div class="title">
                <div class="row">
                    <div class="col">
                        <h4><b>Shopping Cart</b></h4>
                    </div>
                    <!--
                    <div class="col align-self-center text-right text-muted">Items</div>
                -->
                </div>
            </div>


            <?php
            $sql = "SELECT * FROM cart";
            $fetch = mysqli_query($conn, $sql);
            $quantity = 0;
            $price = 00.00;
            $tquantity = 0;
            $tprice = 00.00;
            $item = 0;

            //command to fetch data from cart table
            if (mysqli_num_rows($fetch) > 0) {
                while ($rec = mysqli_fetch_assoc($fetch)) {
                    $item = $item + 1;
                    $quantity = $rec['Quantity'];
                    $price = $rec['Price'];
            ?>

                    <div class="row border-top border-bottom">
                        <div class="row main align-items-center">
                            <div class="col"><img class="img-fluid" src="Images/<?php echo $rec['Image']; ?>" /></div>
                            <div class="col">
                                <div class="row"><?php echo $rec['Name']; ?></div>
                                <div class="row">Color: <?php echo $rec['Color']; ?></div><br>
                                <div class="row">SIZE: <?php echo $rec['Size']; ?></div>
                            </div>
                            <div class="col">
                                <form method="POST" action="" class="text-center">
                                    <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
                                        <button type="button" data-action="decrement" class=" bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                                            <span class="m-auto text-2xl font-thin">−</span>
                                        </button>
                                        <input name="Quantity" type="number" min="1" class="outline-none focus:outline-none text-center w-full bg-gray-300 font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none" value="<?php echo $rec['Quantity']; ?>">
                                        <button type="button" data-action="increment" class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
                                            <span class="m-auto text-2xl font-thin">+</span>
                                        </button>
                                    </div><br>
                                    <input hidden name="idcart" value="<?php echo $rec['ID']; ?>">
                                    <button type="update" class="btn btn-outline-dark">Update</button>
                                </form>
                            </div>

                            <?php $trueprice = $quantity * $price; ?>

                            <div class="col">RM <?php echo number_format($trueprice , 2); ?> <span class="text-right">
                                    <form method="POST" action="">
                                        <input type="hidden" name="ID" value="<?php echo $rec['ID']; ?>">
                                        <button name="remove" class="btn btn-outline-danger" type="submit">
                                            <i class="bi-trash-fill me-1"></i>
                                        </button>
                                    </form>
                                </span></div>
                        </div>
                    </div>
                    <?php
                    //Command change Item Quantity in Cart
                    if (isset($_POST['Quantity'])) {
                        $update = $_POST['Quantity'];
                        $id = $_POST['idcart'];
                        $newquantity = mysqli_query($conn, "UPDATE cart SET Quantity=$update WHERE ID=$id");
                        if ($newquantity == true) { ?>
                            <script>
                                window.location.href = "Customer Cart.php";
                            </script>
                        <?php
                        } else {
                            echo "SQL error: " . mysqli_error($conn);
                        }
                    }

                    //Command to delete item from cart
                    if (isset($_POST['remove'])) {
                        $id = $_POST['ID'];
                        $del = mysqli_query($conn, "DELETE FROM cart WHERE ID=$id");
                        if ($del == true) { ?>
                            <script>
                                window.location.href = "Customer Cart.php";
                            </script>
                    <?php
                        } else {
                            echo "SQL error: " . mysqli_error($conn);
                        }
                    }
                    $tquantity += $rec['Quantity'];
                    $tprice += $trueprice;
                    ?>
                    <tr>
                <?php }
            } else {
                echo "<div class='form-control text-center'>Your Cart is Empty</div>";
            }
                ?>

        </div>
        <div class="col-md-4 justify-content-center">
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
                    <p>RM <?php echo number_format($tprice ,2); ?></p>
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
                    <p><strong>RM <?php echo number_format($tprice , 2); ?></strong></p>
                </div>
            </div>

            <!--Form to direct user to checkout-->
            <?php
            if (empty($_SESSION['CurUser'])) { ?>
                <form action="Log In Customer.php">
                    <button id="code" name="Enter" type="submit" class="form-control btn btn-outline-dark">CHECKOUT</button>
                </form>
            <?php
            } else { ?>
                <form action="Customer Checkout.php">
                    <button id="code" type="submit" class="form-control btn btn-outline-dark">CHECKOUT</button>
                </form>
            <?php } ?>
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

<!--Script button add to cart-->
<script>
    function decrement(e) {
        
        const btn = e.target.parentNode.parentElement.querySelector(
            'button[data-action="decrement"]'
        );
        const target = btn.nextElementSibling;
        let value = Number(target.value);
        value--;
        target.value = value;
    }

    function increment(e) {
        const btn = e.target.parentNode.parentElement.querySelector(
            'button[data-action="decrement"]'
        );
        const target = btn.nextElementSibling;
        let value = Number(target.value);
        value++;
        target.value = value;
    }

    const decrementButtons = document.querySelectorAll(
        `button[data-action="decrement"]`
    );

    const incrementButtons = document.querySelectorAll(
        `button[data-action="increment"]`
    );

    decrementButtons.forEach(btn => {
        btn.addEventListener("click", decrement);
    });

    incrementButtons.forEach(btn => {
        btn.addEventListener("click", increment);
    });
</script>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>