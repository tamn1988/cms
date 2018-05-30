<?php include 'admin/includes/header.php';?>
   <?php include 'admin/includes/navigation.php';?>
   <?php include_once 'admin/includes/db.php';?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->

                <?php
                    global $connection;
                    $query = 'SELECT * from posts';
                    $blogPostQuery = queryGenerator($query);

                    while ($row = mysqli_fetch_assoc($blogPostQuery)) {
                        $postTitle = $row['post_title'];
                        $postAuthor = $row['post_author'];
                        $postDate = $row['post_date'];
                        $postContent = $row['post_content'];
                        $postImage = $row['post_image'];

                    ?>

                        <h2>
                            <a href="#"><?php  echo $postTitle; ?></a>
                        </h2>
                        <p class="lead">
                            by <a href="index.php"><?php  echo $postAuthor; ?></a>
                        </p>
                        <p><span class="glyphicon glyphicon-time"></span> Posted on <?php  echo $postDate; ?></p>
                        <hr>
                        
                        <img class="img-responsive" src=<?php  echo $postImage;  ?> alt="">
                        <hr>
                        <p><?php  echo $postContent; ?></p>
                        <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>



                   <?php } ?> 

                <hr>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include 'admin/includes/sidebar.php';?>



        </div>
        <!-- /.row -->

        <hr>

        <?php include 'admin/includes/footer.php';?>
