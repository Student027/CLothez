<!-- Navigation-->
<?php
session_start();
if (empty($_SESSION['CurUser'])) {
    $_SESSION['CurUser'] = "";
}
include "Customer_nav.php";
?>

<!-- Top content -->
<section class="py-xl-5">
    <div class="container px-4 px-lg-5 mt-5">

        <div class="text-center">
            <h1 class="fw-bolder">Log In</h1>
        </div><br>

        <div class="row justify-content-center">
            <div class="form-box col-sm-5">
                <div class="form-bottom">
                    <form role="form" action="Login Customer process.php" method="post" class="registration-form">
                        <?php
                        if (isset($_GET['error'])) { ?>
                            <p class="error"><?php echo $_GET['error']; ?></p>
                        <?php } ?>


                        <label>Email</label>
                        <input type="email" name="email" placeholder="Email" class="form-control"><br>

                        <label>Password</label>
                        <input type="password" name="pass" placeholder="Enter your password" class="form-control"><br>

                        <div class="text-center">
                            <p>Don't have account ? <a href="Register.php">Register Now</a></p>
                        </div><br>

                        <div class="text-center">
                            <button name="Check" type="submit" class="btn btn-outline-dark">Log In</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?php
include "footer.php";
?>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Core theme JS-->
<script src="js/scripts.js"></script>