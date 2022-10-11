<?php include('header.php');?> 
<script src="https://kit.fontawesome.com/4be4000eba.js" crossorigin="anonymous"></script>

<center><div  class="secondary-header py-3">
    <h1 class="font-weight-bold display-3  text-uppercase">Notices</h1>
    <h6 class="fw-bold"> <a class="fw-bold" href="?"> Home / </a><a class="fw-bold" href="#"> Blog </a> </h6>
</div></center>


<!-- main-section -->
<section class="main mb-5">
    <div class="container">
        <div class="row">        
                <!-- blog description left-side -->
                <div class="col-lg-9 mt-5">
                    <?php if($single_notice['image_url']){ 
                      
                      echo '<center><img class=" " style="width:300px" src="'.$single_notice['image_url'].'" alt="image_url"></center>';
                    }
                    ?>

                    
                    <p class="mt-3"> <small class="text-muted">  <?php echo time_elapsed_string($single_notice['created_at']);  ?> </small></p>
                    <hr>               
                    <h2 class="my-5 font-weight-bold text-center"> <?= $single_notice['title']; ?> </h2>

                    <p> <?= $single_notice['description']; ?> </p>
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

                    
                    
                </div>
                <!-- !blog description right-side col-lg-3 -->
     

           
        </div>
        <!-- !row main > container > row -->        

        
      
    </div>
    <!-- !container -->
</section>
<!-- !main-section -->



<?php include('footer.php');?> 