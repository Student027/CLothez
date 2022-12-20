        <!-- Navigation-->
        <?php
        session_start();
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

                    while ($rec = mysqli_fetch_assoc($select)) { ?>
                        <div class="row gx-4 gx-lg-5 align-items-center">
                            <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="Images/<?php echo $rec['Item_Image']; ?>" alt="..." /></div>
                            <div class="col-md">
                                <h1 class="display-5 fw-bolder"><?php echo $rec['Item_Name']; ?></h1>
                                <div class="fs-5 mb-5">
                                    <span><?php echo "RM " . $rec['Item_Price']; ?></span>
                                </div>
                                <p class="lead"><?php echo $rec['Item_Detail']; ?></p>

                                <div class="text-center">
                                    <form action="Customer Add To Cart.php" method="POST" class="cart-form-container">
                                        <div class="dropdown-divider"></div>

                                        <label><b>Quantity</b></label>
                                        <input name="Quantity" type="number">

                                        <div class="dropdown-divider"></div>

                                        <label><b>Size</b></label>
                                        <div class="product__details__option__size">
                                            <label for="sm">s
                                                <input name="Size" type="radio" id="sm" value="S">
                                            </label>
                                            <label for="m">m
                                                <input name="Size" type="radio" id="m" value="M">
                                            </label>
                                            <label for="l">l
                                                <input name="Size" type="radio" id="l" value="L">
                                            </label>
                                        </div>

                                        <div class="dropdown-divider"></div>

                                        <input type="hidden" name="Name" value="<?php echo $rec['Item_Name']; ?>">
                                        <input type="hidden" name="Price" value="<?php echo $rec['Item_Price']; ?>">
                                        <button name="Add_to_cart" type="submit" class="cart-open-button">
                                            <i class="bi-cart-fill me-1"></i>
                                            Add to cart
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                <?php }} ?>
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
        </body>

        </html>