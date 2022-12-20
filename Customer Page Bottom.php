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

            <!--TrackPants Categories -->
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Categories image-->
                    <img class="img-thumbnail" src="Images\adicolor-classics-primeblue-sst-track-pant-black+white.jpg" />
                    <!-- Categories Card-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Categories name-->
                            <h4 class="fw-bolder">Track Pants</h4>
                        </div>
                    </div>

                    <!-- Categories actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center">
                            <form action="Customer Page Pick Item.php" method="POST">
                                <input type="hidden" name="category" value="Trackpant">
                                <button name="submit" class="btn btn-outline-dark mt-auto" type="submit">View Detail</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!--Sweatpants Categories -->
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Categories image-->
                    <img class="img-thumbnail" src="Images\woven-pant-blue.jpg" />
                    <!-- Categories Card-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Categories name-->
                            <h4 class="fw-bolder">Sweatpants</h4>
                        </div>
                    </div>

                    <!-- Categories actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center">
                            <form action="Customer Page Pick Item.php" method="POST">
                                <input type="hidden" name="category" value="Sweatpant">
                                <button name="submit" class="btn btn-outline-dark mt-auto" type="submit">View Detail</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!--Slim-fit Categories -->
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Categories image-->
                    <img class="img-thumbnail" src="Images\aeroready-sereno-slim-tapered-cut-3stripe-pant-black+grey.jpg" />
                    <!-- Categories Card-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Categories name-->
                            <h4 class="fw-bolder">Slim-fit</h4>
                        </div>
                    </div>

                    <!-- Categories actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center">
                            <form action="Customer Page Pick Item.php" method="POST">
                                <input type="hidden" name="category" value="Slim-fit">
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