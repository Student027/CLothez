<!-- Navigation-->
<?php
session_start();
if (empty($_SESSION['CurUser'])) {
    $_SESSION['CurUser'] = "";
}
include "Customer_nav.php";
include "phpconnect.php";
?>

<!-- Product section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <?php
        if (isset($_POST['submit'])) {
            $id = $_POST['ID'];

            $sql = "SELECT * FROM item WHERE Item_ID=$id";
            $select = (mysqli_query($conn, $sql));

            if ($rec = mysqli_fetch_assoc($select)) {
                $color = "SELECT * FROM item_images WHERE F_Item_ID=$id";
                $fetchcolor = mysqli_query($conn, $color);
        ?>
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6">
                        <div id="listprogramme"></div><br>
                    </div>
                    <div class="col-md">
                        <h4 class="display-7 fw-bolder"><?php echo $rec['Item_Name']; ?></h4><br>
                        <div class="fs-5 mb-5">
                            <span><?php echo "RM " . $rec['Item_Price']; ?></span><br>
                        </div>
                        <script>
                            //this javacript is to handle refresh list of Image
                            function showcolor(str) {
                                if (str == "") {
                                    document.getElementById("listprogramme").innerHTML = "";
                                    return;
                                }
                                const xhttp = new XMLHttpRequest();
                                xhttp.onload = function() {
                                    document.getElementById("listprogramme").innerHTML = this.responseText;
                                }
                                xhttp.open("GET", "ajax-select-color.php?color=" + str + "&id=<?php echo $id ?>");
                                xhttp.send();
                            }
                        </script>
                        <form action="Customer Add To Cart.php" method="POST" class="cart-form-container">
                            <?php
                            while ($clr = mysqli_fetch_assoc($fetchcolor)) {
                            ?>
                                <input name="color" type="radio" value="<?php echo $clr['Color']; ?>" onchange="showcolor(this.value)" required>
                                <label class="h6" for="<?php echo $clr['Color']; ?>"> <?php echo $clr['Color']; ?> </label><br>
                            <?php
                            }
                            ?>
                            <br>
                            <label><b>Available Size</b></label>
                            <div class="product__details__option__size">

                                <!--Check Available Size-->
                                <?php include "Check Size.php"; ?>

                            </div>

                            <div class="dropdown-divider"></div>

                            <input type="hidden" name="Name" value="<?php echo $rec['Item_Name']; ?>">
                            <input type="hidden" name="Price" value="<?php echo $rec['Item_Price']; ?>">
                            <input type="hidden" name="ID" value="<?php echo $rec['Item_ID']; ?>">
                            <button name="Add_to_cart" type="submit" class="cart-open-button">
                                <i class="bi-cart-fill me-1"></i>
                                Add to cart
                            </button>
                        </form>
                    </div>
                </div><br><br>
                <h5><strong>Material</strong></h5>
                <p class="lead"><?php echo $rec['Item_Material']; ?></p>

                <h5><strong>Description</strong></h5>
                <p class="lead"><?php echo $rec['Item_Detail']; ?></p>
        <?php }
        } ?>
    </div>
</section>

<!-- Footer-->
<?php
include "footer.php";
?>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/scripts.js"></script>