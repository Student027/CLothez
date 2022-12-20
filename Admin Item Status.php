        <!-- Navigation-->
        <?php 
        include "Admin_nav.php"; //ni page navigation yang aku call dari file aku, dalam ni ade css
        include "phpconnect.php"; 
        ?>

        <!-- User Information -->
        

        <!-- Section-->
        <section class="py-5">
            <div class="px-4 px-lg-5">
                <div class="row gx-3 row-cols-2 row-cols-xl-3 justify-content-center">

                    <!--Ambil data dari Admin Item.php-->
                    <?php 
                    if(isset($_POST['sub'])){ //Sebab ni isset kau kene post satu input atau button name="sub" dari form
                        $id=$_POST['ID']; //ID booking/reservation dari form atau dari database
                        $name=$_POST['Name']; //Name booking/reservation dari form atau dari database
                        ?>
                                
                    <!--Form for insert Status-->
                    <div class="text-center form-container">
                        <form action="" method="POST">
                        <h4>Item Status <?php echo $name; ?></h4>
                        
                        <input type="hidden" value="<?php echo $id; ?>" name="ID">
                        
                        <label><b>Insert Current Quantity</b></label>
                            <input name="Quantity" type="number">
                        
                        <div class="dropdown-divider"></div>
                        
                        <label><b>Select Available Size</b></label><br>
                        <input class="btn-outline-dark" type="checkbox" id="S" name="Size[]" value="S">
                        <label class="h5" for="S">S</label><br>
                        <input class="btn-outline-dark" type="checkbox" id="M" name="Size[]" value="M">
                        <label class="h5" for="M">M</label><br>
                        <input class="btn-outline-dark" type="checkbox" id="L" name="Size[]" value="L">
                        <label class="h5" for="L">L</label><br>
                        
                        <div class="dropdown-divider"></div>
                        
                        <input class="btn-outline-dark" type="radio" id="Available" name="Status" value="Available">
                        <label class="h5" for="Available">Available</label>
                        <input class="btn-outline-dark" type="radio" id="Unavailable" name="Status" value="Unavailable">
                        <label class="h5" for="Unavailable">Unavailable</label>
                        
                        <div class="dropdown-divider"></div>
                        
                        <button name="Enter" type="submit" class="btn">Update</button>
                        <a type="button" class="btn cancel" href="Admin Item.php">Cancel</a>
                        </form>
                    </div>
                    <?php
                        }

                        if(isset($_POST['Enter'])){
                            $id=$_POST['ID'];
                            $quantity=$_POST['Quantity'];
                            $status=$_POST['Status'];
                            $size=$_POST['Size'];
                            $chk="";
                            foreach($size as $chk1){
                                $chk .= $chk1." ";
                            }

                            $update = mysqli_query($conn,
                            "UPDATE item SET 
                            Item_Quantity='$quantity',
                            Item_Size='$size',
                            Item_Status='$status',
                            Item_Size='$chk'
                            WHERE Item_ID=$id");
                            
                            if($update==true){
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
