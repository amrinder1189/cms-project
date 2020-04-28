 <!-- header -->
 <?php include"includes/db.php" ?>
 <?php session_start(); ?>
 <?php include"includes/header.php" ?>

    <!-- Navigation -->
    <?php include"includes/Navigation.php" ?>


    <!-- Page Content -->
    <div class="container"> 
		
				<?php
				if(isset($_GET['page'])){
				$page=$_GET['page'];
				}
				else{
				$page="";	
				}

    				if($page=="" || $page== 1){
				    $page_1=0;
				}else{
				    $page_1=($page * 3)-3;
				}
				 
                
			





	
	?>

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
                <?php
	
				$query="SELECT * FROM posts";
				$select_posts_count=mysqli_query($conn,$query);
			    $count= mysqli_num_rows($select_posts_count);
				
				$count=ceil($count/3);
				
		
	
                $query="SELECT * FROM posts LIMIT $page_1,3";
                $select_all_posts=mysqli_query($conn,$query);

                while ($row= mysqli_fetch_assoc($select_all_posts)) {
                            $post_title=    $row['post_title'];
                            $post_auhor=  $row['post_auhor'];
                            $post_date=$row['post_date'];
                            $post_content=$row['post_content'];
                            $post_tags=$row['post_tags'];
                            $post_image=$row['post_image'];

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
                <img class="img-responsive" src="images/<?php echo $post_image; ?>" alt="some image">
                <hr>
                <p><?php echo $post_content; ?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>








           <?php     }

                ?>







                
              

              
          
            </div>

            <!-- Blog Sidebar Widgets Column -->
       <?php include"includes/side.php"?>

        </div>
        <!-- /.row -->

        <hr>
		<ul class="pager">
			<?php
	
			for($i=1 ; $i<=$count ; $i++ ){
			    
			    if($i==$page){
				  echo "<li><a class='active_link' href='index.php?page={$i}'>$i</a></li>";	
			    }
			    else{
				  echo "<li><a href='index.php?page={$i}'>$i</a></li>";	
			    }
								 
			
								 
 }
			

			?>
			
		</ul>

        <!-- Footer -->
      <?php include"includes/footer.php" ?>
		
		
		
		