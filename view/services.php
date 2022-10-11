<?php
include('view/header.php'); ?>

<center><div class="secondary-header py-3">
    <h1 class="font-weight-bold display-3  text-uppercase">Services</h1>
    <h6><a class=" fw-bold" href="?"> Home / </a><a class=" fw-bold" href="#"> All Services </a></h6>
</div></center>

<!-- section main -->
<section class="main">
    <div class="container">
        <!-- row -->
        <div class="row my-5">
            <div class="col-6">
                    <img src="assets/travel.jpg" alt="image">
            </div>

            <div class="col-6">
                <h1>Businev Invitation Services</h1>

                <p>
                Competently restore adaptive quality vectors with bricks-and-clicks results. Enthusiastically embrace interoperable vortals whereas alternative technologies.
                Proactively productize principle-centered processes after business portals. Enthusiastically target distributed e-markets whereas 24/365 innovation. Completely mesh prospective strategic theme areas before high standards in materials. Phosfluorescently repurpose high-payoff metrics vis-a-vis tactical portals. Globally customize viral processes for state of the art mindshare
                </p>

                <ul class="custom-4">
                    <li class="li-text">Completely productize next generation</li>
                    <li class="li-text">Completely productize next generation</li>
                    <li class="li-text">Completely productize next generation</li>
                    <li class="li-text">Completely productize next generation</li>
                    <li class="li-text">Completely productize next generation</li>
                    <li class="li-text">Completely productize next generation</li>
                </ul>
            </div>
        </div>
        <!-- !row -->

        <!-- Types of services -->
        <!-- div.container -->
<div class="container">
    <h2 class="mb-4" style="font-weiht:500"> Other Services </h2>
    <!-- div.row -->
    <div class="row my-5">
    <?php foreach($services as $service){ ?>
        <!-- div.col -->
        <div class="col-lg-4 col-md-6 col-sm-12  mb-4">
            <!-- div.card -->
            <div class="card"  style="width: 25rem">

              

                    <a href="view/single_blog.php?blog_id=<?= $service['id'];?>"><img  class="card-img-top img-fluid" src="<?= $service['image_url']; ?>" alt=""></a>
                    <!-- div.card-body -->
                    <div class="card-body">            
                    <h5 class="card-title mb-4"> <b><?= $service['service_title']; ?></b> </h5>
                        <p class="card-text" > <span class="shortDescription" > <?= $service['service_description'] ; ?></span>...</p>
                        <p class="card-text"><small class="text-muted"> <?php date_default_timezone_set('Asia/Seoul'); echo time_elapsed_string($service['created_at']);  ?> </small></p>
                        <span class="uppercase_letter"> <a href="?page=single_service&service_id=<?= $service['id']; ?>" id="test" class="btn btn-primary read-more-button"> read more</a></span>
                    </div> 
                    <!-- !div.body -->

          
                
            </div> 
            <!-- !div.card -->
        </div> 
        <!-- !div.col -->
        <?php } // end foreach ?>
            
    </div> 
    <!-- !div.row -->
</div> 
<!-- !div.container -->
        <!-- !Types of services -->

    </div>
</section>
<!-- !section main -->

<?php
include('view/footer.php');
?>