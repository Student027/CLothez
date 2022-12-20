<?php
include "Admin_nav.php";
?>

<!-- Section-->
<section class="py-4">
    <div class="px-4 px-lg-5">
        <h2>Upload Images Here:</h2><br>
        <div class="gx-4 gx-lg-5">
            <form action="Admin Add Item Image Process.php" enctype="multipart/form-data" method="POST">

                <input class="btn-outline-dark form-control" type="file" name="Image"><br>
                Color:
                <input name="color" type="text"><br><br>

                <input class="btn-outline-dark form-control" type="file" name="Image2"><br>
                Color:
                <input name="color2" type="text"><br><br>

                <input class="btn-outline-dark form-control" type="file" name="Image3"><br>
                Color:
                <input name="color3" type="text"><br><br>

                <button class="btn btn-outline-dark" type="submit" name="Enter-image">Submit</button>
            </form>
        </div>
    </div>
</section>

</html>