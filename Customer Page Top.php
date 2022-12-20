<!-- Navigation Menu-->
<?php
session_start();
if (empty($_SESSION['CurUser'])) {
    $_SESSION['CurUser']="";
}
include "Customer_nav.php";
include "phpconnect.php";
?>

<!-- Section-->

<section class="py-5">
<h1 class="px-5">Pick Your Preferred Categories</h1>
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-3 justify-content-center">

            <!-- Jacket Categories -->
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="img-thumbnail" src="Images\adicolor-classics-firebird-track-jacket-black.jpg"/>
                    <!-- Product Card-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Categories name-->
                            <h4 class="fw-bolder">Jacket</h4>
                        </div>
                    </div>

                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center">
                            <form action="Customer Page Pick Item.php" method="POST">
                                <input type="hidden" name="category" value="Jacket">
                                <button name="submit" class="btn btn-outline-dark mt-auto" type="submit">View Detail</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sweatshirt Categories -->
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="img-thumbnail" src="Images\men-ua-woven-perforated-windbreaker-jacket-black.jpg"/>
                    <!-- Product Card-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Categories name-->
                            <h4 class="fw-bolder">Sweatshirt</h4>
                        </div>
                    </div>

                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center">
                            <form action="Customer Page Pick Item.php" method="POST">
                                <input type="hidden" name="category" value="Sweatshirt">
                                <button name="submit" class="btn btn-outline-dark mt-auto" type="submit">View Detail</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- T-Shirt Categories -->
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="img-thumbnail" src="Images\essentials=big-logo-tee-blue+black.jpg"/>
                    <!-- Product Card-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Categories name-->
                            <h4 class="fw-bolder">T-Shirt</h4>
                        </div>
                    </div>

                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center">
                            <form action="Customer Page Pick Item.php" method="POST">
                                <input type="hidden" name="category" value="T-Shirt">
                                <button name="submit" class="btn btn-outline-dark mt-auto" type="submit">View Detail</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- Footer-->
<?php
include "footer.php";
?>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>