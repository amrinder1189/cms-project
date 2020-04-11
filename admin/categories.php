<?php include"includes/admin_header.php" ?>
    <div id="wrapper">

        <!-- Navigation -->
        <?php include"includes/admin_navigation.php" ?>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            WelCome To Admin
                            <small>Author</small>
                        </h1>
                       
                    </div>
                    <div class="col-lg-6">
                                <!-- query for inserting categories -->
                    <?php 
                    if (isset($_POST['submit'])) {
                        $cat_title= $_POST['categorie'];
               
                    if ($cat_title == "" || empty($cat_title)) {
                        echo "<h3>Baby! you can't leave it like this , please fill.</h3>";
                    }
                    else
                    {
                        $query="INSERT INTO categories(cat_title)";
                        $query.="VALUE('{$cat_title}')";

                        $insert_categorie=mysqli_query($conn,$query);

                        if ($insert_categorie) {
                            echo "<h2>Congo! Your categorie is added successfuly</h2>";
                        }




                    }


                                                }
                    ?>

<form class="form" method="POST" action="">
                            <label for="categorie">Add Categorie</label>
                            <input type="text" class="form-control" name="categorie" >
                            <input type="submit" name="submit" class="btn btn-black">
                            </form><br>


                            <?php

                            if (isset($_GET['edit'])) {
                                $cat_id=$_GET['edit'];
                                 include"update.php";
                            }

                             ?>
                            </div>

                            <div class="col-lg-6">
                               

                                <table class="table table-hover table-bordered">
                                    <tr>
                                        <th>ID</th><th>Categorie name</th>
                                    </tr>

                                <?php
                                $query="SELECT * FROM categories";
                                $select_all_categories=mysqli_query($conn,$query);

                                while ($row = mysqli_fetch_assoc($select_all_categories)) {
                                    $cat_id=$row['cat_id'];
                                    $cat_title=$row['cat_title'];
                               

                                echo "<tr>";
                                echo "<td>{$cat_id}</td>";
                                echo "<td>{$cat_title}</td>";
                                echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";
                                echo "<td><a href='categories.php?edit={$cat_id}'>Edit</a></td>";
                                echo "</tr>";

}
                                ?>
                                </table>
                                
                            </div>

                            <!-- Delete Query-->
                            <?php
                            if (isset($_GET['delete'])) {
                                $delete_cat_id= $_GET['delete'];
                                

                                $query="DELETE FROM Categories WHERE cat_id={$delete_cat_id}";
                                $delete_query=mysqli_query($conn,$query);

                                header("Location: categories.php");
                            }

                            ?>
           
                </div>
                <!-- /.row -->

            </div>

            
               






        </div>
        <!-- /#page-wrapper -->




    </div>
    <!-- /#wrapper -->


<?php include"includes/admin_footer.php" ?>