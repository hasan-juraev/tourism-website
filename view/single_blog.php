<?php include('header.php');?> 
<script src="https://kit.fontawesome.com/4be4000eba.js" crossorigin="anonymous"></script>

<center><div  class="secondary-header py-3">
    <h1 class="font-weight-bold display-3  text-uppercase">Blogs</h1>
    <h6 class="fw-bold"> <a class="fw-bold" href="?"> Home / </a><a class="fw-bold" href="#"> Blog </a> </h6>
</div></center>


<!-- main-section -->
<section class="main mb-5">
    <div class="container">
        <div class="row">        
                <!-- blog description left-side -->
                <div class="col-lg-9 mt-5">
                    <img class=" " style="width:600px" src="<?= $single_blog['img_url']; ?>" alt="blog_image">
                    <p class="mt-3"> <small class="text-muted">  <?php echo time_elapsed_string($single_blog['created_at']);  ?> </small></p>
                    <hr>               
                    <h2 class="font-weight-bold"> <?= $single_blog['title']; ?> </h2>

                    <p> <?= $single_blog['description']; ?> </p>
                </div>
                <!-- !blog description left-side -->

                <!-- blog description right-side -->
                <div class="col-lg-3 mt-5">
                    <form class="mb-5" action="" method="post">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-9">                       
                                    <input type="text" name="search" >
                                </div>
                                <div class="col-lg-3">
                                    <button type="submit">search</button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <!-- recent blogs  -->
                    <div class="container">
                        <h4>Recent blogs</h4>
                        <div class="row">                
                            <?php foreach($blogs as $blog){ ?>
                                <div class="col-lg-3 mb-3"> 
                                    <img style="width:65px;" src="<?= $blog['img_url']; ?>" alt="">
                                </div>
                                <div class="col-lg-9">
                                <a href=""><p class="" >  <?= $blog['title'] ; ?> </p></a>
                                </div>

                            <?php }  ?><!-- endforeach -->
                        </div>                        
                    </div>
                    <!-- !recent blogs -->
                    <!-- blog categories -->
                    <p style="font-weight:500;" class="mt-5 h3 text-uppercase">Blog Categories</p>
                    <ul>
                        <?php foreach($blogs as $blog_cat){ ?>
                            <li class="lead"> <?= $blog_cat['blog_category'] ; ?> </li>
                        <?php }  ?><!-- endforeach -->
                    </ul>
                    <!-- !blog-categories -->
                    
                </div>
                <!-- !blog description right-side col-lg-3 -->
     

           
        </div>
        <!-- !row main > container > row -->

        <section class="related-blogs">
        <p class="fw-bold lead text-uppercase">related blogs</p>
        </section>

        <!-- comments -->
        <section class="comments">
            <p class="fw-bold lead text-uppercase">comments</p>
            <center><small>No comments</small></center>
        </section>
        <!-- !comments -->

        <!-- add comment -->
        <section class="add-comment">
            <p class="fw-bold lead text-uppercase">Add comment</p>
            <div class="container">
                <form action="">
                    <div class="row">
                        <div class="col-lg-4">
                            <label for="commentor_name" class="form-label">Name*</label>
                            <input class="form-control" type="text" name="commentor_name" required>
                        </div>
                        <div class="col-lg-4">
                            <label for="commentor_email" class="form-label">Email*</label>
                            <input class="form-control" type="text" name="commentor_email" required >
                        </div>
                        <div class="col-lg-4">
                            <label for="commentor_website" class="form-label">Website</label>
                            <input class="form-control" type="text" name="commentor_website" >
                        </div>
                        
                    </div>
                    <div class="row mt-2">
                        <div class="col-lg-12">
                            <label for="comment" class="form-label">Message</label>
                            <textarea style="max-width:100%" name="comment" id="comment" cols="150" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <button style="border-radius:20px" type="submit" class="btn text-uppercase btn-primary">POST Comment</button>
                        </div>

                    </div>
                </form>
            </div>
        </section>
        <!-- !add comment -->        
    </div>
    <!-- !container -->
</section>
<!-- !main-section -->



<?php include('footer.php');?>