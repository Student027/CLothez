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
<h1 class="px-5">Pick Your Preferred Item</h1>
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-3 justify-content-center">
            <?php
            if (isset($_POST['submit'])) {
                $category = $_POST['category'];

                $sql = "SELECT * FROM item WHERE Item_Category='$category'";
                $select = (mysqli_query($conn, $sql));

                while ($rec = mysqli_fetch_assoc($select)) {
                    $id = $rec['Item_ID'];
                    $sqlimg = "SELECT * FROM item_images WHERE F_Item_ID=$id";
                    $fecthimg = mysqli_query($conn, $sqlimg);
                    $img = mysqli_fetch_assoc($fecthimg);
            ?>
                    <!-- Categories -->
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Categories image-->
                            <img class="img-thumbnail" src="Images/<?php echo $img['Images']; ?>" />
                            <!-- Categories Card-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Categories name-->
                                    <h4 class="fw-bolder"><?php echo $rec['Item_Name']; ?></h4>
                                </div>
                            </div>

                            <!-- Categories actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <form action="Customer Item description.php" method="POST">
                                        <input type="hidden" name="ID" value="<?php echo $rec['Item_ID'];?>">
                                        <button name="submit" class="btn btn-outline-dark mt-auto" type="submit">View Detail</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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
<script src="js/scripts.js"></script>
</body>

</html>