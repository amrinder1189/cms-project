     <div class="col-md-4">




                <!-- Blog Search Well -->
                <div class="well">

                


                    <h4>Blog Search Here</h4>
                    <form method="post" action="search.php">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" name="submit" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div></form><br>


<!-- LOgin system  -->
                    <form class="form" method="post" action="login.php">
                    <div class="form-group">
                        <label for="username">Email</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" name="password" class="form-control">
                    </div>
                     <div class="form-group">
                        <input type="submit" name="login" value="login" class="form-control btn btn-warning">
                    </div>
                    </form>




                    <!-- /.input-group -->
                </div>













                <!-- Blog Categories Well -->
                <div class="well">
                    <?php
                      

                                            $query="SELECT * FROM Categories ";
                                            $Categories_links=mysqli_query($conn,$query);
                    ?>



                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">

                           <?php
                                            while ($row= mysqli_fetch_assoc($Categories_links)) {

                                            $cat_title=$row['cat_title'];

                                            echo "<li><a href='#'>{$cat_title}</a></li>";

                                            }

                                ?>


                               <!--  <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li> -->
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                    <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>