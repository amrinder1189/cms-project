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
                </div>
                <!-- /.row -->

                <?php

                if (isset($_GET['delete'])) {
                    
                    $delete_id=$_GET['delete'];


                    $query="DELETE FROM posts WHERE post_id = '$delete_id'";
                    $delete_query=mysqli_query($conn,$query);

                }

                ?>




            </div>
            <!-- /.container-fluid -->


        </div>
        <!-- /#page-wrapper -->




    </div>
    <!-- /#wrapper -->


<?php include"includes/admin_footer.php" ?>