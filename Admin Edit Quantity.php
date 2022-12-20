<?php
include "Admin_nav.php";
include "phpconnect.php";

if (isset($_POST['ID'])) {

    $id = $_POST['ID'];

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

    <!-- Section-->
    <section class="py-5">
        <div class="px-4 px-lg-5">
            <div class="row gx-3 row-cols-2 row-cols-xl-3 justify-content-center">
                <!--Form for insert Status-->
                <div class="text-center form-container">
                    <form action="" method="POST">
                        <h4>Item Quantity</h4>

                        <input type="hidden" value="<?php echo $id; ?>" name="ID">

                        <label><b>Insert Current Quantity</b></label><br><br>
                        S:
                        <input name="quantitys" type="number" value="<?php echo $sizeS['Quantity']; ?>" min="0"><br><br>
                        M:
                        <input name="quantitym" type="number" value="<?php echo $sizeM['Quantity']; ?>" min="0"><br><br>
                        L:
                        <input name="quantityl" type="number" value="<?php echo $sizeL['Quantity']; ?>" min="0"><br><br>
                        <input name="id" value="<?php echo $id; ?>" hidden>

                        <button type="submit" name="enter" class="btn">Update</button>
                        <a type="button" class="btn cancel" href="Admin Item.php">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php
}

if (isset($_POST['enter'])) {
    $fid = $_POST['id'];
    $quatitys = $_POST['quantitys'];
    $quatitym = $_POST['quantitym'];
    $quatityl = $_POST['quantityl'];

    $sqls = "UPDATE item_size SET
                Quantity = $quatitys
                WHERE F_Item_ID = $fid AND Size = 'S'";
    $sqlm = "UPDATE item_size SET
                Quantity = $quatitym
                WHERE F_Item_ID = $fid AND Size = 'M'";
    $sqll = "UPDATE item_size SET
                Quantity = $quatityl
                WHERE F_Item_ID = $fid AND Size = 'L'";

    $runs = mysqli_query($conn, $sqls);
    $runm = mysqli_query($conn, $sqlm);
    $runl = mysqli_query($conn, $sqll);
?>
    <script>
        alert("Item Quantity Inserted");
        window.location.href = "Admin Item.php";
    </script>
<?php
}

include "footer.php";