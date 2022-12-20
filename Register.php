<!-- Navigation-->
<?php
session_start();
if (empty($_SESSION['CurUser'])) {
    $_SESSION['CurUser'] = "";
}
include "Customer_nav.php";
include "phpconnect.php";
?>
<br>

<!-- Top content -->
<div class="top-content">
    <div class="inner-bg align-content-center">
        <div class="container ">
            <div class="text-center">
                <h1 class="fw-normal fs-4">Fill in the form below to get instant access</h1>
            </div>

            <div class="dropdown-divider"></div>


            <?php if (isset($_GET['error'])) { ?>
                <p class="error text-center"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <div class="row justify-content-center">
                <div class="col-md-8">

                    <h1 class="fw-bolder">SHIPPING ADDRESS</h1>

                    <form role="form" action="Register process.php" method="post" class="registration-form">

                        <label>Address 1</label>
                        <input type="text" name="address1" placeholder="Street name and number" class="form-first-name form-control">

                        <div class="dropdown-divider"></div>

                        <label>Address 2</label>
                        <input type="text" name="address2" placeholder="Additional address information" class="form-email form-control">

                        <div class="dropdown-divider"></div>

                        <label>State</label>
                        <input type="text" name="state" placeholder="Exp: Selangor" class="form-email form-control">

                        <div class="dropdown-divider"></div>

                        <label>City</label>
                        <input type="text" name="city" placeholder="Exp: Shah Alam" class="form-email form-control">

                        <div class="dropdown-divider"></div>

                        <label>Postal Code</label>
                        <input type="number" name="postal" placeholder="Exp: 14420" class="form-email form-control">
                        <br><br>
                </div>


                <div class="col-md-4">
                    <div class="text-center">
                        <h1 class="fw-bolder">REGISTER</h1>
                    </div>


                        <label for="username">Username</label>
                        <input type="text" name="username" placeholder="Username...." class="form-first-name form-control">

                        <div class="dropdown-divider"></div>

                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="Email..." class="form-email form-control">

                        <div class="dropdown-divider"></div>

                        <label for="password">Password</label>
                        <input type="password" name="password" placeholder="Enter your password" class="form-email form-control">

                        <div class="dropdown-divider"></div>

                        <input type="password" name="confirm-password" placeholder="Confirm your password" class="form-email form-control">

                        <br><br>

                        <button name="register" type="submit" class="form-control btn btn-outline-primary">Sign Up</button>
                    </form><br><br>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<?php
include "footer.php";
?>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Core theme JS-->
<script src="js/scripts.js"></script>

</body>

</html>