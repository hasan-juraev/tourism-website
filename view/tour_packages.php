<?php include('view/header.php'); ?>

<center><div class="secondary-header py-3">
    <h1 class="font-weight-bold display-3  text-uppercase">Tour Packages</h1>
    <h6 class="fw-bold"> <a class="fw-bold" href="?"> Home / </a><a class="fw-bold" href="?page=services"> Services </a> </h6>
</div></center>

<!-- banner -->
<div id="tour-package-banner">
    <img id="banner-image" src="assets/bg-image2.jpg" alt="Forest" >
</div>
<!-- !banner -->

<section class="main">
    
<!-- container -->
<div class="container">
    <h3 class="fs-2 mt-3"> All Tour Packages</h3>
     <!-- row -->
    <div class="row my-3">

        

        <?php foreach($tour_packages as $package){ ?>
            <div class="col-lg-3 col-md-6 col-xs-12 my-4">
            <div class="card shadow-lg bg-body rounded">
               <a href="?page=single_tourpackage&tour_id=<?=$package['id']; ?>"> <img src="<?= $package['img_url']; ?>" alt="" class="card-img-top img-fluid">
                <div class="card-body">
                    <h5 class="card-title text-center"><?= $package['title']; ?></h5>
                    <p class="card-text text-center"><small class="text-muted"><?= $package['category']; ?></small></p>
                </div></a>
            </div>
        </div>
            <?php } // end foreach ?>

    </div>
    <!-- !row -->
   
</div>
<!-- !container -->


<!-- container -->
<div class="container">
  
</div>
<!-- !container -->

</section>

<?php include('view/footer.php'); ?>