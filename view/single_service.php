<?php include('header.php');?> 
<script src="https://kit.fontawesome.com/4be4000eba.js" crossorigin="anonymous"></script>

<center><div  class="secondary-header py-3">
    <h1 class="font-weight-bold display-3  text-uppercase">Services</h1>
    <h6 class="fw-bold"> <a class="fw-bold" href="?"> Home / </a><a class="fw-bold" href="?page=services">All Service </a> </h6>
</div></center>


<!-- main-section -->
<section class="main mb-5">
    <div class="container">
        <div class="row">        
                <!-- service description left-side -->
                <div class="col-lg-9 mt-5">
                    <img class="rounded mx-auto d-block" style="width:600px" src="<?= $single_service['image_url']; ?>" alt="service_image">
                    <h2 class="font-weight-bold text-center my-5"> <?= $single_service['service_title']; ?> </h2>

                    <p> <?= $single_service['service_description']; ?> </p>
                </div>
                <!-- !service description left-side -->

                <!-- service description right-side -->
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

                    
                    
                </div>
                <!-- !service description right-side col-lg-3 -->
     

           
        </div>
        <!-- !row main > container > row -->

      

           
    </div>
    <!-- !container -->
</section>
<!-- !main-section -->



<?php include('footer.php');?> 