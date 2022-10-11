<?php include('header.php');?> 

<center><div class="secondary-header py-3">
    <h1 class="font-weight-bold display-3  text-uppercase">Events</h1>
    <h6 class="text-white fw-bold"> <a class=" fw-bold" href="?"> Home /</a>  <a class=" fw-bold" href="#"> All Events </a> </h6>
</div></center>

<!-- section all events  -->
<section class="all-blogs">
    <div class="container">
        <div class="row my-5">
            <?php foreach($events as $event){ ?>
                <!-- image -->
                <div class="col-lg-7 mb-5">
                    <img class="w-50" src="<?= $event['img_url']; ?>" alt="img">

                </div>
                <!-- !image -->

                <!-- text -->
                <div class="col-lg-5">
                    <p class="fs-2"> <a  href="?page=single_event&event_id=<?= $event['id']; ?>"><?= $event['title']; ?></p></a>
                    <p class="fs-5"> <span class="shortDescription"><?= $event['description']; ?></span></p>

                    <div class="col-12">
                        <a href="?page=single_event&event_id=<?= $event['id']; ?>"><button style="border-radius:20px" class="btn btn-primary text-uppercase"> read more</button></a>
                    </div>
                </div>
                <!-- !text -->
            <?php } // end foreach ?>
        </div>
    </div>
</section>
<!--  !section all events -->

 <!-- div.container -->
<div class="container">
    <h2 class="mb-4" style="font-weiht:500"> Latest </h2>
    <!-- div.row -->
    <div class="row my-5">
    <?php foreach($events_3 as $event){ ?>
        <!-- div.col -->
        <div class="col-lg-4 col-md-6 col-sm-12  mb-4">
            <!-- div.card -->
            <div class="card"  style="width: 25rem">

              

                    <a href="view/single_event.php?event_id=<?= $event['id'];?>"><img  class="card-img-top img-fluid" src="<?= $event['img_url']; ?>" alt=""></a>
                    <!-- div.card-body -->
                    <div class="card-body">            
                    <h5 class="card-title mb-4"> <b><?= $event['title']; ?></b> </h5>
                        <p class="card-text" > <span class="shortDescription" > <?= $event['description'] ; ?></span>...</p>
                        <p class="card-text"><small class="text-muted"> <?php date_default_timezone_set('Asia/Seoul'); echo time_elapsed_string($event['created_at']);  ?> </small></p>
                        <span class="uppercase_letter"><a href="?page=single_event&event_id=<?= $event['id']; ?>" id="test" class="btn btn-primary read-more-button">read more</a></span>
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

<div class="section keywords">
    
</div>

<script>
$(document).ready(function(){
  
  $('.shortDescription').each(function (f) {

      var newstr = $(this).text().substring(0,130);
      $(this).text(newstr);

    });
})

</script>


<?php include('footer.php');?>