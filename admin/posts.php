<?php include"includes/admin_header.php" ?>
    <div id="wrapper">

        <!-- Navigation -->
        <?php include"includes/admin_navigation.php" ?>


        <div id="page-wrapper">

          

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            WelCome To Admin
                            <small>Author</small>
                        </h1>
                </div></div>

                <div class="row ">
                    <div class="col-lg-12">
                    <table class="table table-hover table-bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Author</th>
                            <th>Title</th>
                            <th>Categorie-id</th>
                            <th>Status</th>
                            <th>Images</th>
                            <th>Tags</th>
                            <th>Comment</th>
                            <th>Dates</th>
                            <th>Content</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                           

                        
                            <?php 

                                $query=" SELECT * FROM posts";
                                $select_posts=mysqli_query($conn,$query);

                                while($row= mysqli_fetch_assoc($select_posts)) {
                                       $post_id= $row['post_id'];
                                       $post_categorie_id=$row['post_categorie_id'];
                                       $post_title= $row['post_title'];
                                       $post_auhor= $row['post_auhor'];
                                       $post_date= $row['post_date'];
                                       $post_image= $row['post_image'];
                                       $post_content= $row['post_content'];
                                       $post_tags= $row['post_tags'];
                                       $post_comment_count= $row['post_comment_count'];
                                       $post_statud= $row['post_statud'];


                                        echo "<tr>";
                                        echo "<td>{$post_id}</td>";
                                        echo "<td>{$post_auhor}</td>";
                                        echo "<td>{$post_title}</td>";
                                        echo "<td>{$post_categorie_id}</td>";
                                        echo "<td>{$post_statud}</td>";
                                        echo "<td>{$post_image}</td>";
                                        echo "<td>{$post_tags}</td>";
                                        echo "<td>{$post_comment_count}</td>";
                                        echo "<td>{$post_date}</td>";
                                        echo "<td>{$post_content}</td>";
                                        echo "<td><a href='upload_post.php?source={$post_id}'>Edit</a></td>";
                                        echo "<td><a href=''>Delete</a></td>";

                                        echo "</tr>";
                                        
                                        
                                       
                                        
                                        





                                }

                            ?>

                         
                            
                        
                       </tbody> 
                    </table>
                </div>

            </div>

            
               






        
        <!-- /#page-wrapper -->




    </div>
    <!-- /#wrapper -->


<?php include"includes/admin_footer.php" ?>