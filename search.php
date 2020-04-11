 <!-- header -->
 <?php include"includes/db.php" ?>
 <?php include"includes/header.php" ?>

    <!-- Navigation -->
    <?php include"includes/Navigation.php" ?>


    <!-- Page Content -->
    <div class="container"> 

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <?php


                    if (isset($_POST['submit'])) {
                        $search=$_POST['search'];
 

                    $query="SELECT * FROM posts where post_tags LIKE '%$search%' ";
                    $search_query=mysqli_query($conn,$query);

              if (!$search_query) {
                die("sorry".mysqli_error($conn));
              }

              $count=mysqli_num_rows($search_query);

              if ($count==0) {
                  echo "<h1>No Result</h1>";
              }
              
             
                while ($row= mysqli_fetch_assoc($search_query)) {
                            $post_title=    $row['post_title'];
                            $post_auhor=  $row['post_auhor'];
                            $post_date=$row['post_date'];
                            $post_content=$row['post_content'];
                            $post_tags=$row['post_tags'];


?>


<h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="#"><?php echo $post_title; ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $post_auhor; ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post_date; ?></p>
                <hr>
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                <hr>
                <p><?php echo $post_content; ?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>








           <?php     }
       }

                ?>







                
              

              
          
            </div>

            <!-- Blog Sidebar Widgets Column -->
       <?php include"includes/side.php"?>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
      <?php include"includes/footer.php" ?>