<!-- additional for drop-down program -->
<?php
//Capture $_GET data
$category = $_GET['category'];

if ($category == "Top") {
?>
	<input name="categories" type="radio" value="Jacket">
	<label class="h6" for="Jacket">Jacket</label><br>
	<input name="categories" type="radio" value="Sweatshirt">
	<label class="h6" for="Sweatshirt">Sweatshirt</label><br>
	<input name="categories" type="radio" value="T-shirt">
	<label class="h6" for="T-Shirt">T-Shirt</label>
<?php
}
if ($category == "Bottom") {
?>
	<input name="categories" type="radio" value="Trackpant">
	<label class="h6" for="Trackpant">Trackpant</label><br>
	<input name="categories" type="radio" value="Sweatpant">
	<label class="h6" for="Sweatpant">Sweatpant</label><br>
	<input name="categories" type="radio" value="Slim-fit">
	<label class="h6" for="Slim-fit">Slim-fit</label>
<?php
}
?><br>