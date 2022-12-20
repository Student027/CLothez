        <!-- Navigation-->
        <?php
        include "Admin_nav.php";
        ?>

        <!-- Section-->
        <section class="py-4">
            <div class="px-4 px-lg-5">
                <h1>Insert Item Details</h1><br>
                <div class="gx-4 gx-lg-5">
                    <form role="form" action="Admin Item Process.php" method="post" enctype="multipart/form-data">
                        <h5 class="fw-normal text-opacity-25">Name:</h5>
                        <input name="Name" type="text" class="form-control" placeholder="Item Name"><br>

                        <h5 class="fw-normal text-opacity-25">Description:</h5>
                        <textarea name="Detail" placeholder="Item Detail" class="form-control" id="Item-detail"></textarea><br>

                        <h6 class="fw-normal text-opacity-25">Material</h6>
                        <input name="Material" type="text" class="form-control" placeholder="Cotton , Polyster , etc"><br>

                        <h5 class="fw-normal text-opacity-25">Insert Price:</h5>
                        <input name="Price" type="number" step="0.01" class="form-control" placeholder="Item Price"><br>

                        <!-- additional for drop-down faculty code -->
                        <h5 class="fw-normal text-opacity-25">Category</h5>
                        <select class="form-control" name="category" required onchange="showcategory(this.value)">
                            <option value disabled selected>Select Categories of Item</option>
                            <option value="Top">Top</option>
                            <option value="Bottom">Bottom</option>
                        </select><br>

                        <script>
                            //this javacript is to handle refresh list of categories
                            function showcategory(str) {
                                if (str == "") {
                                    document.getElementById("listprogramme").innerHTML = "";
                                    return;
                                }
                                const xhttp = new XMLHttpRequest();
                                xhttp.onload = function() {
                                    document.getElementById("listprogramme").innerHTML = this.responseText;
                                }
                                xhttp.open("GET", "ajax-select-categories.php?category=" + str);
                                xhttp.send();
                            }
                        </script>
                        
                        <div id="listprogramme">
                            Select type categories of item
                        </div><br>

                        <button class="btn-outline-dark form-control" type="submit" name="Add_item">
                            Add New Item
                        </button>
                    </form>
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
        <script src="js/scripts.js"></script>
        </body>

        </html>