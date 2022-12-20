<!-- Navigation-->
<?php
include "Admin_nav.php";
?>

<!-- Log In -->
<section class="py-xl-5">
    <div class="container px-4 px-lg-5 mt-5">

        <div class="text-center">
            <h1 class="fw-bolder">Enter your Identification</h1>
        </div><br>

        <div class="row justify-content-center">
            <div class="form-box col-sm-5">
                <div class="form-bottom">
                    <form role="form" action="Login Admin process.php" method="post" class="registration-form">
                        <?php
                        if (isset($_GET['error'])) { ?>
                            <p class="error"><?php echo $_GET['error']; ?></p>
                        <?php } ?>

                        <label>Admin ID</label>
                        <input type="text" name="uname" placeholder="Admin ID" class="form-control"><br>

                        <label>Password</label>
                        <input type="password" name="pass" placeholder="Enter your password" class="form-control"><br>

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
<?php include "footer.php"; ?>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Core theme JS-->
<script src="js/scripts.js"></script>

</body>

</html>