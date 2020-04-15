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

                <div class="row">
                    <div class="col-lg-12">
                        <table class="table table-hover table-bordered">
                    <thead> <th>User Id</th>
                            <th>name</th>
                            <th>email</th>
                            <th>password</th>
                            <th>Image</th>
                            <th>DELETE</th>
                        </thead>
                        <tbody>
                            <?php
                            $query="SELECT * from users";
                            $users_all_query = mysqli_query($conn,$query);

                            while ($row = mysqli_fetch_assoc($users_all_query)) {
                               $user_id = $row['user_id'];
                               $user_name =$row['user_name'];
                               $user_email = $row['user_email'];
                               $user_pass =  $row['user_pass'];
                               $user_image = $row['user_image'];

                               echo "<tr>";
                               echo "<td>{$user_id}</td>";
                               echo "<td>{$user_name}</td>";
                               echo "<td>{$user_email}</td>";
                               echo "<td>{$user_pass}</td>";
                               echo "<td>{$user_image}</td>";
                               echo "<td><a href='users_all.php?p_id={$user_id}'>DELETE</a></td>";
                               echo "</tr>";

                            }

                            ?>
                            
                        </tbody>






                        </table>
                    </div>
                    
                </div>


            </div>

            
         </div>
        <!-- /#page-wrapper -->


<?php


if (isset($_GET['p_id'])) {
    $id = $_GET['p_id'];
    
    $query="DELETE FROM users WHERE user_id = {$id} ";
    $delete_user= mysqli_query($conn,$query);

    header("Location: users_all.php");
    
}



?>

     </div>
    <!-- /#wrapper -->


<?php include"includes/admin_footer.php" ?>