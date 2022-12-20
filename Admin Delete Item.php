        <!-- Navigation-->
        <?php 
        include "Admin_nav.php"; 
        include "phpconnect.php"; 
        ?>

        <!-- User Information -->


        <!-- Section-->
        <section class="py-5">
            <div class="px-4 px-lg-5">
                <div class="row gx-3 row-cols-2 row-cols-xl-3 justify-content-center">
                    
                    <!--Fecth data from Admin Item-->
                    <?php 
                    if(isset($_POST['sub'])){ 
                        $id=$_POST['ID'];
                        $name=$_POST['Name'];
                    ?>
                    
                    <!--Modal for confirm delete data-->
                    <div class="text-center form-container">
                        <form method="POST">
                            <h4>Delete <?php echo $name; ?> </h4>
                            <input type="hidden" name="ID" value="<?php echo $id; ?>">
                            <input type="hidden" name="Name" value="<?php echo $name; ?>">
                            <button name="delete" type="submit" class="btn">
                                Delete
                            </button>
                            <a type="button" class="btn cancel" href="Admin Item.php">Cancel</a>
                        </form>
                    </div>
                    
                    <?php
                        }

                        //Fecth data and recall data from MySQL
                        if(isset($_POST['delete'])){
                            $id=$_POST['ID'];
                            $name=$_POST['Name'];
                            $delete = mysqli_query($conn,"DELETE FROM item WHERE Item_ID=$id");
                            if($delete==true){
                            header("location:Admin Item.php");
                            }
                            else{
                                echo "SQL error: ".mysqli_error($conn);
                            }
                        }
                        ?>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js">
        </script>


    </body>
</html>
