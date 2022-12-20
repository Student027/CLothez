<?php
include "phpconnect.php";


$s = "SELECT * FROM item_size WHERE F_Item_ID = $id AND Size LIKE '%S%'";
$m = "SELECT * FROM item_size WHERE F_Item_ID = $id AND Size LIKE '%M%'";
$l = "SELECT * FROM item_size WHERE F_Item_ID = $id AND Size LIKE '%L%'";
$checks = (mysqli_query($conn, $s));
$checkm = (mysqli_query($conn, $m));
$checkl = (mysqli_query($conn, $l));

if ($rec1 = mysqli_fetch_assoc($checks)) {
    $quantity1 = 0;
    $quantity1 = $rec1['Quantity'];
    if ($quantity1 > 0) {
?>
        <label for="sm">s
            <input name="Size" type="radio" id="sm" value="S" required>
        </label>
    <?php

    } else {
    }
}

if ($rec2 = mysqli_fetch_assoc($checkm)) {
    $quantity2 = 0;
    $quantity2 = $rec2['Quantity'];
    if ($quantity2 > 0) {
    ?>
        <label for="m">m
            <input name="Size" type="radio" id="m" value="M" required>
        </label>
    <?php

    } else {
    }
}

if ($rec3 = mysqli_fetch_assoc($checkl)) {
    $quantity3 = 0;
    $quantity3 = $rec3['Quantity'];
    if ($quantity3 > 0) {
    ?>
        <label for="l">l
            <input name="Size" type="radio" id="l" value="L" required>
        </label>
    <?php

    } else {
    }
}


if ($quantity1 == 0 && $quantity2 == 0 && $quantity3 == 0) { ?>

<input hidden name="Size" value="none">
    <br>
    <p><b>Sorry, but there is no available size right now</b></p>
<?php
}
