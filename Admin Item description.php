        <!-- Navigation-->
        <?php
        include "Admin_nav.php";
        include "phpconnect.php";
        ?>

        <!--Ambik data dari Admin Item-->
        <?php if(isset($_POST['Img'])){
            $id=$_POST['ID'];

            $sql="SELECT * FROM item WHERE Item_ID=$id";
            $result=mysqli_query($conn, $sql);

            while($rec=mysqli_fetch_assoc($result)){
        ?>
        <!-- Item Info Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6">
                        <img class="card-img-top mb-5 mb-md-0" src="Images/<?php echo $rec['Item_Image']; ?>" alt="..." />
                    </div>
                    <div class="col-md">
                        <!--Item Name-->
                        <h1 class="display-5 fw-bolder"><?php echo $rec['Item_Name']; ?></h1>
                        <!--Item Price-->
                        <div class="fs-5 mb-5">
                            <span><?php echo $rec['Item_Price']; ?></span>
                        </div>
                        <!--Item Info-->
                        <p class="lead"><?php echo $rec['Item_Detail']; ?></p>
                    </div>
                </div>
            </div>
            <?php }} ?>
        </section>

        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
