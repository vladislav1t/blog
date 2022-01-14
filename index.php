<?php
include 'includes/header.php';
include_once 'engine/Crud.php';
$blogs = new Crud();
?>
        <!-- Main Content-->

        <div class="container px-4 px-lg-5">
        <?php
        $blogsAll = $blogs->all();
        if ($blogsAll):
        foreach ($blogsAll as $blog):
        ?>
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title"><?php echo $blog['name'] ?></h2>
                            <h3 class="post-subtitle"><?php echo strlen($blog['description']) ?></h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">Start Bootstrap</a>
                            on September 24, 2021
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                </div>
            </div>
        <?php
        endforeach;
        endif;
        ?>
            <?php include 'includes/footer.php' ?>
