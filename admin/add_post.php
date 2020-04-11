<?php include"includes/admin_header.php" ?>
    <div id="wrapper">

        <!-- Navigation -->
        <?php include"includes/admin_navigation.php" ?>



        <?php
        
        if(isset($_POST['make_post'])) {
             
                    $post_auhor =     $_POST['auhor'];
                    $post_title =     $_POST['title'];
                    


                    $post_image =     $_FILES['image']['name'];
                    $post_image_temp=$_FILES['image']['tmp_name'];


                    $post_content =     $_POST['content'];
                    $post_status =     $_POST['status'];
                    $post_tags  =   $_POST['tags'];
                    $post_date =     date('d-m-y');
                    $post_comment_count =     4;
                    $post_categorie_id =     $_POST['categorie_id'];

                   move_uploaded_file($post_image_temp,"../images/$post_image");


            $query="INSERT INTO posts(post_categorie_id, post_title, post_auhor, post_date, post_image, post_content, post_tags, post_comment_count, post_statud)";

            $query.="VALUES('{$post_categorie_id}','{$post_title}','{$post_auhor}',now(),'{$post_image}','{$post_content}','{$post_tags}','{$post_comment_count}','{$post_status}')";


            $make_post=mysqli_query($conn,$query);

            if (!$make_post) {
                die("query failed ".mysqli_error($conn));
            }



    }



        ?>





        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            WelCome To Admin
                            <small>Author</small>
                        </h1>
                </div></div>

                <div class="row">
                    <div class="col-lg-6">

                    <form class="form" method="post" enctype="multipart/form-data">

                        <label class="">Post-author</label>
                        <input type="text" name="auhor" value="" class="form-control" >

                        <label class="">Post-title</label>
                        <input type="text" name="title" value="" class="form-control" >

                        <label class="">Post-categorie_id</label>
                        <input type="text" name="categorie_id" value="" class="form-control" >

                        <label class="">Post-status</label>
                        <input type="text" name="status" value="" class="form-control" >

                        <label class="">Post-image</label>
                        <input type="file" name="image" value="" class="form-control" >

                        <label class="">Post-tags</label>
                        <input type="text" name="tags" value="" class="form-control" >

                        <label class="">Post-content</label>
                        <input type="text" name="content" value="" class="form-control" >

                        <label class="">Post-date</label>
                        <input type="date" name="date" value="" class="form-control" >

                        <label class="">Post-coments-counts</label>
                        <input type="text" name="comment_count" value="" class="form-control" >
                        <br>


                        <input type="submit" name="make_post" value="submit" class="btn btn text-center btn-primary" >










                        
                        
                    </form>

</div>












            </div>

            
               






        
        <!-- /#page-wrapper -->


</div>

    </div>
    <!-- /#wrapper -->


<?php include"includes/admin_footer.php" ?>