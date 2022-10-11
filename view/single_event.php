<?php include('header.php');?> 
<script src="https://kit.fontawesome.com/4be4000eba.js" crossorigin="anonymous"></script>


<center><div  class="secondary-header py-3">
    <h1 class="font-weight-bold display-3  text-uppercase">Events</h1>
    <h6 class="fw-bold"> <a class="fw-bold" href="?"> Home / </a><a class="fw-bold" href="?page=services">Services </a> </h6>
</div></center>


<!-- main-section -->
<section class="main mb-5">
    <div class="container">
        <div class="row">        
                <!-- service description left-side -->
                <div class="col-lg-9 mt-5">
                    <h2 class="font-weight-bold  mb-4"> <?= $single_event['title']; ?>  </h2>
                    <hr >
                    <p class="mt-1 d-flex justify-content-end"> <small class="text-muted"> Published:   <?php echo time_elapsed_string($single_event['created_at']);  ?> </small></p>

                   
                    <img class="rounded mx-auto d-block" style="width:600px" src="<?= $single_event['img_url']; ?>" alt="event_image">

                  

                    <p class="mt-5"> <?= $single_event['description']; ?> </p>
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