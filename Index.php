<!-- Navigation-->
<?php
session_start();
if (empty($_SESSION['CurUser'])) {
    $_SESSION['CurUser'] = "";
}
include "Customer_nav.php";
?>

<style>
    .header1 {
        background-image: url("Images/header-wallpaper.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .imgthumb {
        float: right;
        max-width: 440px;
        max-height: 600px;
        object-fit: cover;
    }
</style>

<!--Banner Begin-->
<div class="py-5 header1">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder text-black">Welcome to CLOTHEZ</h1>
            <p class="lead fw-bolder text-black">Where we sell Sportwear</p>
        </div>
    </div>
</div>
<!--Banner End-->

<!-- Section Item Collection Begin -->
<section class="banner spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 offset-lg-4">
                <div class="banner__item">
                    <div class="banner__item__pic">
                        <img class="imgthumb" src="Images\Best-Running-Jackets-00-Hero.jpg" alt="">
                    </div>
                    <div class="banner__item__text">
                        <h2>Jacket Collections</h2>
                        <form action="Customer Page Pick Item.php" method="POST">
                            <input type="hidden" name="category" value="Jacket">
                            <button name="submit" class="btn btn-outline-dark mt-auto" type="submit">SHOP NOW</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="banner spad"></div>
            <div class="col-lg-5">
                <div class="banner__item banner__item--middle">
                    <div class="banner__item__pic">
                        <img src="Images\track.PNG" alt="">
                    </div>
                    <div class="banner__item__text">
                        <h2>Track Pant Collections</h2>
                        <form action="Customer Page Pick Item.php" method="POST">
                            <input type="hidden" name="category" value="Trackpant">
                            <button name="submit" class="btn btn-outline-dark mt-auto" type="submit">SHOP NOW</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="banner__item banner__item--last">
                    <div class="banner__item__pic">
                        <img class="imgthumb" src="Images\adicolor-heritage-now-striped-track-pant-brown-side-view.jpg" alt="">
                    </div>
                    <div class="banner__item__text">
                        <h2>AEROREADY SERENO SLIM TAPERED</h2>
                        <form action="Customer Item description.php" method="POST">
                            <input type="hidden" name="ID" value="21">
                            <button name="submit" class="btn btn-outline-dark mt-auto" type="submit">SHOP NOW</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section Item Collection End -->

<!-- Section New Arrival Begin -->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <h3 class="text-center">New Arrival</h3>
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-3 justify-content-center">
            <?php
            include "phpconnect.php";
            $sql = "SELECT * FROM item order BY Item_ID DESC LIMIT 3";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {

                while ($rec = mysqli_fetch_assoc($result)) {
                    $id = $rec['Item_ID'];
                    $sqlimg = "SELECT * FROM item_images WHERE F_Item_ID=$id";
                    $fecthimg = mysqli_query($conn, $sqlimg);
                    $img = mysqli_fetch_assoc($fecthimg);
            ?>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="img-thumbnail" src="Images/<?php echo $img['Images']; ?>" />
                            <!-- Product Card-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h4 class="fw-bolder"><?php echo $rec['Item_Name'];  ?></h4>
                                    <!-- Product price-->
                                    <h5 class="fw-bolder"><?php echo "RM " . $rec['Item_Price'];  ?></h5>
                                </div>
                            </div>

                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <form action="Customer Item description.php" method="POST">
                                        <input type="hidden" name="ID" value="<?php echo $rec['Item_ID']; ?>">
                                        <button name="submit" class="btn btn-outline-dark mt-auto" type="submit">View Detail</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo "No DATA";
            }
            ?>
        </div>
</section>
<!-- Section New Arrival End -->


<!-- Footer-->
<?php
include "footer.php";
?>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>

<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>

</html>