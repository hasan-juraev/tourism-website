<?php include('header.php');?> 
<script src="https://kit.fontawesome.com/4be4000eba.js" crossorigin="anonymous"></script>


<center><div  class="secondary-header py-3">
    <h1 class="font-weight-bold display-3  text-uppercase">Tour Packages</h1>
    <h6 class="fw-bold"> <a class="fw-bold" href="?"> Home / </a><a class="fw-bold" href="?page=services">Services </a> </h6>
</div></center>


<!-- main-section -->
<section class="main mb-5">
    <div class="container">
        <div class="row">        
                <!-- service description left-side -->
                <div class="col-lg-9 mt-5">    
                              
                    <img class="rounded mx-auto d-block" style="width:600px" src="<?= $single_tourpackage['img_url']; ?>" alt="tourpackage_image">
                    <h2 class="fw-bold  my-5"> <?= $single_tourpackage['title']; ?>  </h2>

                    <div class="container">
                        <div class="row">
                            <div class="col-auto text-dark bg-light"> <?= $single_tourpackage['languages']; ?> </div>
                            <div class="col-auto  text-dark bg-light"> <?= $single_tourpackage['category']; ?> </div>
                            <div class="col-auto  text-danger bg-light"><?= $single_tourpackage['discount']; ?>%  off</div>
                          
                        </div>
                    </div>

                    <p class="mt-5"> <?= $single_tourpackage['description']; ?> </p>
                </div>
                <!-- !event description left-side -->

                <!-- event description right-side -->
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

                            <div class="row mt-5">
                                <div class="col-auto my-2 fs-3 text-dark bg-light">Maximum number of people: <?= $single_tourpackage['num_of_people']; ?></div>
                                <div class="col-auto my-2 fs-3 text-dark bg-light">Date: <?= $single_tourpackage['date_of_tour']; ?></div>
                                <div class="col-auto my-2 fs-3 text-dark bg-light">Price: <span class="fw-bold">$ <?= $single_tourpackage['price']; ?></span> <span class=" text-muted fs-5"><del>$ 600</del></span></div>
                            </div>
                        </div>
                    </form>

                    
                    
                </div>
                <!-- !event description right-side col-lg-3 -->
     

           
        </div>
        <!-- !row main > container > row -->

      

           
    </div>
    <!-- !container -->
</section>
<!-- !main-section -->



<?php include('footer.php');?> 