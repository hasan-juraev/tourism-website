<?php include('header.php');?>

<center><div class="secondary-header py-3">
    <h1 class="font-weight-bold display-3  text-uppercase">Mosque</h1>
    <h6 class="fw-bold"> <a class="fw-bold" href="?"> Home  /</a> <a class="fw-bold" href="#"> Mosque </a> </h6>
</div></center>

<!-- section main -->
<section class="main">
    <div class="container w-50">
       
        <div class="row my-5">
            <!-- sort by region --> 
            <form action="">          
            <div class="row mb-5">
                <div class="col-md-4">
                    <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    </select>
                </div>

                <!-- city -->
                <div class="col-md-4">
                    <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    </select>
                </div>
                <!-- search -->
                <div class="col-md-4">                    
                    <button type="submit" class="btn btn-primary mb-3">Search</button>                
                </div>
            </div>
            <!-- !row -->
            </form>

            <div class="row">
                <?php foreach($mosques as $mosque){ ?>
                    
                    <div class="col-md-4 mt-2 "><img style="border-radius: 10px;" src="<?= $mosque['img_url'] ? $mosque['img_url'] : "assets/mosque_df.jpg"; ?>" class="img-fluid" alt="mosque_image"></div>
                    <div class="col-md-8 mb-5 border bg-light p-3">
                        <p class="">Name: <?= $mosque['name'] ?></p>
                        <p class="">Address: <?= $mosque['address'] ?></p>
                        <p class="">Phone: <?= $mosque['phone'] ? $mosque['phone'] : "not available"; ?> </p>
                        <p class="">Show on map: <a class="text-danger" href="<?= $mosque['address_link'] ?>">link</a></p>
                    </div>
                <?php } ?>

            </div>

            </div>

                
         
        </div>
        <!-- !row -->
     
    </div>
</section>


<?php include('footer.php');?>