
                            <form class="form" method="POST" action="">
                                <?php

                                if (isset($_GET['edit'])) {
                                    $cat_id=$_GET['edit'];

                                    $query="SELECT * FROM categories WHERE cat_id={$cat_id}";
                                    $edit_query=mysqli_query($conn,$query);

                                    while ($row= mysqli_fetch_assoc($edit_query)) {
                                        $cat_id=$row['cat_id'];
                                        $cat_title=$row['cat_title'];
                                        ?>


                             <label for="categorie">Edit categorie</label>
                            <input type="text" class="form-control" name="cat_title" value="<?php echo $cat_title; ?>" >

                                
                                <?php
                                    }

                                }

                                ?>
                                <!-- update categorie query-->

                                <?php

                                if (isset($_POST['update'])) {
                                    $cat_title=$_POST['cat_title'];

                                    $query="UPDATE Categories SET cat_title = '{$cat_title}' WHERE cat_id={$cat_id}";
                                    $query_to_update=mysqli_query($conn,$query);
                                }


                                ?>





                            <input type="submit" name="update" class="btn btn-black">
                            </form>