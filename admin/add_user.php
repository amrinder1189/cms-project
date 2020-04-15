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
                  <?php
                  if (isset($_POST['add_user'])) {
                   $name = $_POST['name'];
                   $email = $_POST['email'];
                   $pass = $_POST['pass'];
                   $role = $_POST['role'];
                   $image = $_POST['image'];


                   $query="INSERT INTO users(user_name,user_email,user_pass,user_role,user_image)";
                   $query.="VALUES('$name','$email','$pass','$role','$image')";

                   $add_user=mysqli_query($conn,$query);

                  }

                  ?>




                        <form class="form" method="post" enctype="multipart/form-data">

                        <label class="">User name</label>
                        <input type="text" name="name" value="" class="form-control" >

                        <label class="">User Email</label>
                        <input type="text" name="email" value="" class="form-control" >

                        <label class="">User password</label>
                        <input type="text" name="pass" value="" class="form-control" >

                        <label class="">User Role</label>
                        <input type="text" name="role" value="" class="form-control" >

                        <label class="">User Image</label>
                        <input type="file" name="image" value="" class="form-control" ><br>

                        <input type="submit" name="add_user" value="submit" class="btn btn text-center btn-danger" >










                        
                        
                    </form>
                <div class="row">
                    <div class="col-lg-12">
                     
                        
                    </div>
                    
                </div>


            </div>

            
         </div>
        <!-- /#page-wrapper -->




     </div>
    <!-- /#wrapper -->


<?php include"includes/admin_footer.php" ?>