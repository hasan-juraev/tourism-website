<?php include('header.php');?>


<!-- section jumbotron -->
<section id="jumbotron">
  <div class="banner animated tada"> <!-- banner animated tada--> 
    <div class="mt-5 big-text animated tada"> 
      <p> Enjoy Your Tirp With Us! </p>      
      <div class="wrap"> <!-- search -->
        <div class="search">
            <input type="text" class="searchTerm" placeholder="Search">
            <button type="submit" class="searchButton"> <i class="fa fa-search"></i> </button>
        </div>
      </div><!-- !search -->      
    </div>  <!-- !banner animated tada-->   
  </div>
</section>
<!-- !section jumbotron -->

<!-- section ma'lumot va xizmatlar -->
<section class="mt-5 mb-3" id="malumot-xizmatlar">

  <div class="container">
    <h2 class="my-3">Blogs</h2>

    <div class="row">
     <?php foreach($blogs as $blog){ ?>

      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="card">
          <div class="card-img-top">
            <img src="<?= $blog['img_url']; ?>" class="img-fluid"  alt="image" >
          </div>
          <div class="card-body">
            <h5 class="card-title fw-bold"> <?= $blog['title']; ?> </h5>
           <a href="?page=single_blog&blog_id=<?= $blog['id']; ?>"> <p class="card-text"> <span class="  shortDescription" ><?= $blog['description']; ?> </small></p></a>
           <a href="?page=single_blog&blog_id=<?= $blog['id']; ?>" class="btn btn-primary my-2 text-uppercase read-more-button">read more</a>
          </div>
        </div>
      </div>  
      
      <?php } ?>
      
      <div class="mb-5 parentContainer">
        <a href="?page=blogs">
          <div class="centeredDiv-barchasini-korish"> See All </div>
        </a>
      </div>
  </div>
  
</section>
<!-- !section ma'lumot va xizmatlar -->

<!-- section ta'lim -->
<section id="talim">

  <div class="mb-5 container">  <!-- container -->

    <h2 class="my-3">Mosque</h2>
    <div class="row">  <!-- row -->
      <?php foreach($mosques as $mosque){ ?>

      <div class="col-md-4 col-sm-6 col-xs-12"> <!-- col -->
        <div class="card">
          <div class="card-img-top">
            <img src="<?= $mosque['img_url'] ? $mosque['img_url'] : "assets/mosque_df.jpg"; ?>" class="img-fluid"  alt="image">
          </div>
          <div class="card-body">
            <h5 class="card-title"> <?= $mosque['name']; ?> </h5>
            <p class="card-text"> <?= $mosque['address']; ?> </p>
            <small> <a href="<?= $mosque['address_link']; ?>">View on map</a></small>
            
          </div>
        </div>
      </div>

      <?php } ?>

      
      
    </div>   <!-- !row -->

  </div> <!-- !container -->

  <div class="mb-5 parentContainer">
    <a href="?page=mosque">
      <div class="centeredDiv-barchasini-korish"> See All </div>
    </a>
  </div>

</section>
<!-- !section ta'lim -->

<!-- section immigratsiya/viza -->
<section id="immigratsiya-viza">

  <div class="container mb-5">    
    <h2 class="my-3">Tour Packages</h2>
    <div class="row"> <!-- row -->
      
    <?php foreach($tour_packages as $package) {?>

      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="card" >
          <div class="card-img-top">
            <img src="<?= $package['img_url']; ?>" class="img-fluid" alt="image">
          </div>
          <div class="card-body">
            <h5 class="card-title"><?= $package['title']; ?> </h5>
            <small> <?= $package['category']; ?> </small>
            <p class="card-text"><small class="text-danger mx-2"> <?= $package['discount']; ?>% off </small>  $<?= $package['price']; ?></p> 
            <a href="?page=single_tourpackage&tour_id=<?= $package['id']; ?>" class="btn btn-primary my-2 text-uppercase read-more-button">read more</a>
          </div>
        </div>
      </div>

    <?php } ?>

    </div> <!-- !row -->

  </div>

  <div class="mb-5 parentContainer">
    <a href="?page=tour_packages">
      <div class="centeredDiv-barchasini-korish"> See All </div>
    </a>
  </div>

</section>
<!-- !section immigratsiya/viza-->

<!-- section aviachipta -->
<div class="container py-5">
    <div class="jumbotron text-white jumbotron-image shadow" style="background-image: url(assets/ticket.png);">
      
      <div id="jumbotron-text">  
        <h1 class="mb-4">
          Avia chipta
        </h1>      
        <a href="#" id="buyurtma-button" class="btn btn-primary">Buyurtma qilish</a>        
      </div>

    </div>
  </div>
<!-- !section aviachipta -->

<!-- section hayot tarzi -->
<section class="mb-3"  id="hayot-tarzi">
  
    <div class="container mb-4">
      <hr>
      <h2 class="my-3"> Services</h2>
      <div class="row"> <!-- row -->
      <?php foreach($services as $service){ ?>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <a href="?page=single_service&service_id=<?= $service['id']; ?>">
            <div class="card">
              <div class="card-img-top">
                <img src="<?= $service['image_url']; ?>" class="img-fluid" alt="image">
              </div>
              <div class="card-body">
                <p class="card-text"><?= $service['service_title']; ?></p>
                <small class="text-muted"><?= $service['service_type']; ?></small>
              </div>
            </div>
          </a>
        </div>

        <?php } ?>
        
      </div>    <!-- !row -->  
      
    </div>

    <div class="parentContainer">
      <a href="?page=services">
        <div class="mb-5 centeredDiv-barchasini-korish"> See All </div>
      </a>
    </div>

 
</section>
<!-- !section hayot tarzi -->

<!-- section elonlar-->
<section id="elonlar">
  <div class="container">
    <hr>
    <h2 class="my-3">Notices</h2>
    <table class="table border">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Created At</th>
          <th scope="col">Views</th>
        </tr>
      </thead>

      <tbody>
        <?php $i = 0; foreach($notices as $notice){ $i++ ?>

        <tr>
          <th scope="row"><?= $i; ?></th>
          <td> <a href="?page=single_notice&notice_id=<?= $notice['id']; ?>"><?= $notice['title']; ?></a> </td>
          <td> <?= time_elapsed_string($notice['created_at']); ?> </td>
          <td>0</td>
        </tr>

        <?php  } ?>
        
      </tbody>
    </table>
</div>

</section>
<!-- !section -->

<!-- section so'nggi yangiliklar -->
  <section id="latest-news">
    <div class="container">
      <hr>
      <h2 clas="mb-5"> Events</h2>

    <div class="card-group mb-4">
      <?php foreach($events as $event){?>

      <div class="card m-2">
        <img src="<?= $event['img_url']; ?>" class="card-img-top" alt="image">
        <a href="?page=single_event&event_id=<?= $event['id']; ?>"><div class="card-body">
          <h5 class="card-title"> <?= $event['title']; ?> </h5>
         
          <p class="card-text"> <small class="text-muted"> Last updated at <?= time_elapsed_string($event['updated_at']); ?> </small> </p>
        </div></a>
      </div>
      
      <?php } ?>
      
    </div>

    <a href="?page=events">
      <div class="mb-5 centeredDiv-barchasini-korish"> See All </div>
    </a>
    </div>

  </section>
<!-- !so'nggi yangiliklar -->

<?php include('footer.php'); ?>