<!-- additional for drop-down program -->
<?php
include "phpconnect.php";
//Capture $_GET data
$color = $_GET['color'];
$id = $_GET['id'];

$sqlimg = "SELECT * FROM item_images WHERE F_Item_ID = $id AND Color LIKE '%$color%'";
$runsql = mysqli_query($conn,$sqlimg);
if ($img = mysqli_fetch_assoc($runsql)){ ?>
<img class="card-img-top mb-5 mb-md-0" src="Images/<?php echo $img['Images']; ?>">
<?php
}
?><br>