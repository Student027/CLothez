<!-- Navigation-->
<?php
include "Admin_nav.php";
include "phpconnect.php";


if (isset($_POST['ID'])) {
    $id = $_POST['ID'];

    $sql = "SELECT * FROM item WHERE Item_ID=$id";
    $select = (mysqli_query($conn, $sql));

    if ($rec = mysqli_fetch_assoc($select)) {
?>
        <!-- Section-->
        <section class="py-4">
            <div class="px-4 px-lg-5">
                <h1>Edit Item Details</h1><br>
                <div class="gx-4 gx-lg-5">
                    <form role="form" action="Admin Item Process.php" method="post" enctype="multipart/form-data">
                        <h5 class="fw-normal text-opacity-25">Name:</h5>
                        <input name="Edit-Name" type="text" class="form-control" placeholder="Item Name" value="<?php echo $rec['Item_Name']; ?>"><br>

                        <h5 class="fw-normal text-opacity-25">Description:</h5>
                        <textarea rows="5" name="Edit-Detail" placeholder="Item Detail" class="form-control" id="Item-detail">
                        <?php echo $rec['Item_Detail']; ?>
                        </textarea><br>

                        <h6 class="fw-normal text-opacity-25">Material</h6>
                        <input name="Edit-Material" type="text" class="form-control" placeholder="Cotton , Polyster , etc" value="<?php echo $rec['Item_Material']; ?>"><br>

                        <h5 class="fw-normal text-opacity-25">Insert Price:</h5>
                        <input name="Edit-Price" type="number" step="0.01" class="form-control" placeholder="Item Price" value="<?php echo $rec['Item_Price']; ?>"><br>

                        <input hidden name="ID" value="<?php echo $id; ?>">

                        <button class="btn-outline-dark form-control" type="submit" name="Edit_item">
                            Edit Item
                        </button>
                    </form>
                </div>
            </div>
        </section>
        <?php }} ?>
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
