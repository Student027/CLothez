<!-- Navigation-->
<?php
include "Admin_nav.php";
include "phpconnect.php";

if (empty($_SESSION['CurAdmin'])) {
    header("Location: Log In Admin.php");
} else {
?>

    <!-- Section-->
    <section class="py-5">
        <div class="px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-3 justify-content-center">

                <form action="Admin Add Item.php" class="form-control">
                    <button class="btn btn-outline-dark form-control">
                        <h4 class="text-center">Add New Item</h4>
                    </button>
                </form>

                <div class="dropdown-divider"></div>

                <table class="table table-striped">
                    <tr>
                        <td align="middle">Item ID</td>
                        <td align="middle">Image</td>
                        <td align="middle">Item Name</td>
                        <td align="middle">Item Quantity</td>
                        <td align="middle">Item Price (RM)</td>
                        <td align="middle"></td>
                        <td align="middle"></td>
                    </tr>

                    <!--Fetch data from MySQL-->
                    <?php
                    $sql = "SELECT * FROM item";
                    $result = mysqli_query($conn, $sql);

                    //Delete Selected Item
                    if (isset($_GET['delete_id'])) {
                        $sql_query = "DELETE FROM item WHERE Item_ID=" . $_GET['delete_id'];
                        mysqli_query($conn, $sql_query);
                        header("Location: Admin Item.php");
                    }

                    if (mysqli_num_rows($result) > 0) {

                        while ($rec = mysqli_fetch_assoc($result)) {
                            $id = $rec['Item_ID'];
                            $sqlimg = "SELECT * FROM item_images WHERE F_Item_ID=$id";
                            $fecthimg = mysqli_query($conn, $sqlimg);
                            $img = mysqli_fetch_assoc($fecthimg);

                            //sql to fetch item quantity of size S
                            $sqlsizeS = "SELECT * FROM item_size WHERE F_Item_ID=$id AND Size = 'S'";
                            $fecthsizeS = mysqli_query($conn, $sqlsizeS);
                            $sizeS = mysqli_fetch_assoc($fecthsizeS);

                            //sql to fetch item quantity of size M
                            $sqlsizeM = "SELECT * FROM item_size WHERE F_Item_ID=$id AND Size = 'M'";
                            $fecthsizeM = mysqli_query($conn, $sqlsizeM);
                            $sizeM = mysqli_fetch_assoc($fecthsizeM);

                            //sql to fetch item quantity of size L
                            $sqlsizeL = "SELECT * FROM item_size WHERE F_Item_ID=$id AND Size = 'L'";
                            $fecthsizeL = mysqli_query($conn, $sqlsizeL);
                            $sizeL = mysqli_fetch_assoc($fecthsizeL);

                    ?>

                            <tr>
                                <td align="middle"><?php echo $rec["Item_ID"]; ?></td>

                                <td align="middle">
                                    <form method="POST" action="Admin Item description.php">
                                        <input name="ID" type="hidden" value="<?php echo $rec['Item_ID']; ?>">
                                        <button type="submit" name="Img">
                                            <img class="img-thumbnail" src="Images/<?php echo $img['Images']; ?>">
                                        </button>
                                    </form>
                                </td>

                                <td align="middle"><?php echo $rec['Item_Name']; ?></td>
                                <td align="middle"><?php
                                                    echo 
                                                    "S : ".$sizeS['Quantity']."<br>
                                                    M : ".$sizeM['Quantity']."<br>
                                                    L : ".$sizeL['Quantity'];
                                                    ?></td>
                                <td align="middle"><?php echo $rec['Item_Price']; ?></td>

                                <td align='middle'>
                                    <form method="POST" action="Admin Edit Item.php">
                                        <input type="hidden" name="ID" value="<?php echo $rec["Item_ID"]; ?>">
                                        <button name="sub" type="submit" class='btn btn-outline-dark flex-shrink-0'>
                                            Edit Item
                                        </button>
                                    </form><br>

                                    <form method="POST" action="Admin Edit Quantity.php">
                                        <input type="hidden" name="ID" value="<?php echo $rec["Item_ID"]; ?>">
                                        <button name="sub" type="submit" class='btn btn-outline-dark'>
                                            Change<br>Quantity
                                        </button>
                                    </form>
                                </td>

                                <!-- Button untuk delete data dari MySQL-->
                                <td align='middle'>
                                    <a class="btn btn-outline-dark flex-shrink-0" href="javascript:delete_id(<?php echo $rec['Item_ID']; ?>)">Remove</a>
                                </td>
                            </tr>
                        <?php }
                    } else { ?>
                        <tr>
                            <td align="middle">No Data</td>
                            <td align="middle">No Data</td>
                            <td align="middle">No Data</td>
                            <td align="middle">No Data</td>
                            <td align="middle">No Data</td>
                            <td align="middle">No Data</td>
                            <td align="middle"></td>
                        </tr>
                <?php }
                } ?>
                </table>
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
    <script src="js\scripts.js"></script>
    <script>
        function delete_id(id) {
            if (confirm("Sure To Remove ?")) {
                window.location.href = 'Admin Item.php?delete_id=' + id;
            }
        }
    </script>