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
                </div></div>

                <div class="row">
                    <div class="container-fluid">



                    <?php

                    if (isset($_GET['source'])) {
                        $the_upload_id = $_GET['source'];

                        $query="SELECT * FROM posts WHERE post_id = $the_upload_id";
                        $upload_post=mysqli_query($conn,$query);

                        while ($row= mysqli_fetch_assoc($upload_post)) {
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
                        }




                         if(isset($_POST['make_edit_post'])) {

          
             
                    $the_post_auhor =     $_POST['auhor'];
                    $the_post_title =     $_POST['title'];
                    $the_post_image =     $_FILES['image']['name'];
                    $the_post_image_temp=$_FILES['image']['tmp_name'];
                    $the_post_content =     $_POST['content'];
                    $the_post_status =     $_POST['status'];
                    $the_post_tags  =   $_POST['tags'];
                    $the_post_date =     date('d-m-y');
                    $the_post_comment_count =     4;
                    $the_post_categorie_id =     $_POST['categorie_id'];

                   move_uploaded_file($the_post_image_temp,"../images/$the_post_image");


            // $query="UPDATE posts SET (post_categorie_id, post_title, post_auhor, post_date, post_image, post_content, post_tags, post_comment_count, post_statud) WHERE post_id=$the_upload_id";

            $query="UPDATE posts SET 
       post_categorie_id = '$the_post_categorie_id', 
       post_title = '$the_post_title', 
       post_auhor = '$the_post_auhor', 
       post_date = '$the_post_date', 
       post_image = '$the_post_image',
       post_content = '$the_post_content',
       post_tags = '$the_post_tags',
       post_comment_count = '$the_post_comment_count',
       post_statud = '$the_post_status'
  where post_id = '$the_upload_id'";




            // $query.="VALUES('{$the_post_categorie_id}','{$the_post_title}','{$the_post_auhor}',now(),'{$the_post_image}','{$the_post_content}','{$the_post_tags}','{$the_post_comment_count}','{$the_post_status}')";


            $make_post=mysqli_query($conn,$query);

            if (!$make_post) {
                die("query failed ".mysqli_error($conn));
            }



    }




                    }


                    ?>















                <!-- Page Heading -->
               
                    <div class="col-lg-6">

                    <form class="form" method="post" enctype="multipart/form-data">

                        <label class="">Post-author</label>
                        <input type="text" name="auhor" value="<?php echo $post_auhor; ?>" class="form-control" >

                        <label class="">Post-title</label>
                        <input type="text" name="title" value="<?php echo $post_title; ?>" class="form-control" >

                        <label class="">Post-categorie_id</label>
                        <input type="text" name="categorie_id" value="<?php echo $post_categorie_id; ?>" class="form-control" >

                        <label class="">Post-status</label>
                        <input type="text" name="status" value="<?php echo $post_statud; ?>" class="form-control" >

                        <label class="">Post-image</label>
                        <input type="file" name="image" value="<?php echo $post_image; ?>" class="form-control" >

                        <label class="">Post-tags</label>
                        <input type="text" name="tags" value="<?php echo $post_tags; ?>" class="form-control" >

                        <label class="">Post-content</label>
                        <input type="text" name="content" value="<?php echo $post_content; ?>" class="form-control" >

                        <label class="">Post-date</label>
                        <input type="date" name="date" value="<?php echo $post_date; ?>" class="form-control" >

                        <label class="">Post-coments-counts</label>
                        <input type="text" name="comment_count" value="<?php echo $post_comment_count; ?>" class="form-control" >
                        <br>


                        <input type="submit" name="make_edit_post" value="submit" class="btn btn text-center btn-primary" >

   
                        
                    </form>
 <?php
        
       



        ?>



</div>

        
        
        <!-- /#page-wrapper -->


</div>

    </div>
    <!-- /#wrapper -->


<?php include"includes/admin_footer.php" ?>